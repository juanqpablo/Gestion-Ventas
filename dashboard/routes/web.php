<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('login');

Route::view('admin','home/admin/home')->name('admin');
Route::view('users','layouts/admin/pages/users')->name('users');
Route::view('product','layouts/admin/pages/product')->name('product');
Route::view('client','layouts/admin/pages/clients')->name('client');
Route::view('profile','layouts/admin/pages/profile')->name('profile');

//rutas vista Vendedor
Route::view('seller','home/seller/home')->name('seller');
Route::view('product-seller','layouts/seller/pages/product')->name('productS');
Route::view('client-seller','layouts/seller/pages/clients')->name('clientS');
Route::view('orders-seller','layouts/seller/pages/orders')->name('ordersS');
Route::view('sents-seller','layouts/seller/pages/sents')->name('sentsS');
