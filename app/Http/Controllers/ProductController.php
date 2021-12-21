<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProductController;
use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    public function products(Request $req)
    {
        $products = Products::latest()->get();
        return view('pages.home', ["products" => $products]);
    }

    public function product($product_title)
    {
        $product = DB::table('products')->where('title', '=', $product_title)->first();
        return view('pages.product_detail', ['product' => $product]);
    }

    public function cart(Request $req)
    {
        $userId = Session::get('user')['id'];
        $carts = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->select('products.*', 'carts.id as cart_id')->get();

        return view('pages.cart', ['carts' => $carts]);
    }

    public function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }

    }

    public function removeFromCart(Request $req)
    {
        Cart::destroy($req->cart_id);
        return redirect('/cart');
    }

    public static function cartItemsCount()
    {
        $userId = Session::get('user');
        return Cart::where('user_id', $userId)->count();
    }

    public static function getTotalPrice()
    {
        $userId = Session::get('user')['id'];
        $total_price = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->sum('products.price');

        return $total_price;
    }

    public function shippingPage()
    {
        $userId = Session::get('user')['id'];
        $products = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->select('products.title', 'products.price', 'products.image')
            ->get();

        return view('pages.shipping', ['products' => $products]);
    }
}
