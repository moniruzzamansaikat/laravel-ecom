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
Route::get('/cart', [ProductController::class, 'cart']);
Route::post('/cart', [ProductController::class, 'addToCart']);
Route::get('/orders', [UserController::class, 'orders']);
Route::get('/shipping', [ProductController::class, 'shippingPage']);
Route::post('/shipping', [UserController::class, 'makeOrder']);
Route::post('/cart/remove', [ProductController::class, 'removeFromCart']);
