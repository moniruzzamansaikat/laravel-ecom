<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'products']);

Route::get('/login', function () {
    return view('pages.login');
});

Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/p/{product_name}', [ProductController::class, 'product']);
Route::get('/cart', [ProductController::class, 'cart'])->middleware('userauth');
Route::post('/cart', [ProductController::class, 'addToCart'])->middleware('userauth');
Route::get('/orders', [UserController::class, 'orders'])->middleware('userauth');
Route::get('/shipping', [ProductController::class, 'shippingPage'])->middleware('userauth');
Route::post('/shipping', [UserController::class, 'makeOrder'])->middleware('userauth');
Route::post('/cart/remove', [ProductController::class, 'removeFromCart'])->middleware('userauth');
Route::view('/setting', 'pages.setting');
