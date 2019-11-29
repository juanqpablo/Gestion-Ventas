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
