<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    public function login(Request $req)
    {
        # search for user via email
        $user = User::where(['email' => $req->email])->first();

        if (!$user || !Hash::check($req->password, $user->password)) {
            return 'Invalid credentials';
        } else {
            $req->session()->put("user", $user);
            return redirect('/');
        }
    }

    public function logout(Request $req)
    {
        $req->session()->forget('user');
        return redirect('/');
    }

    public function orders()
    {
        return view('pages.orders');
    }

    public static function getOrders()
    {
        $orders = DB::table('orders')->get();
        return $orders;
    }

    public function makeOrder(Request $req)
    {
        $userId = Session::get('user')['id'];

        // calculate price
        $price = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->sum('products.price');

        // count products
        $products_count = ProductController::cartItemsCount();

        // Create an order
        $order = new Order;
        $order->user_id = $userId;
        $order->price = $price;
        $order->products_count = $products_count;
        $order->address = $req->address;
        $order->status = 'Being ready!';
        $order->payment_method = $req->payment_method;
        $order->save();

        return redirect('/orders');
    }

    public function updateProfile(Request $req)
    {
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;

        $errors = [];
        if (strlen($password) < 6) {
            array_push($errors, 'Password\'s min length is 6!');
        }

        // if no errors, update data
        if (count($errors) === 0) {
            $user_id = User::where('email', '=', $email)->update([
                'email' => $email,
                'name' => $name,
                'password' => Hash::make($password),
            ]);
            $req->session()->put('user', [
                'id' => $user_id,
                'name' => $name,
                'email' => $email,
            ]);
            return redirect('/setting');
        } else {
            return view('pages.setting', ['errors' => $errors]);
        }
    }
}
