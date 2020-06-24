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

// Route::get('/', function () {
//     return view('home');
// })->name('app');

Route::view('/', 'auth/login')->name('home');
//redirect to System Admin
Route::get('/admin', function(){
  return view('admin');
});
//redirect to system Seller
Route::get('/seller', function(){
  return view('seller');
});
//Configuration views
Route::view('admin','home/admin/home')->name('admin');
Route::view('users','layouts/admin/pages/users')->name('users');
Route::view('product','layouts/admin/pages/product')->name('product');
Route::view('client','layouts/admin/pages/clients')->name('client');
Route::view('profile','layouts/admin/pages/profile')->name('profile');
Route::view('orders','layouts/admin/pages/orders')->name('orders');
Route::view('sents','layouts/admin/pages/sents')->name('sents');

//Routes view Seller
Route::view('seller','home/seller/home')->name('seller');
Route::view('product-seller','layouts/seller/pages/product')->name('productS');
Route::view('client-seller','layouts/seller/pages/clients')->name('clientS');
Route::view('orders-seller','layouts/seller/pages/orders')->name('ordersS');
Route::view('sents-seller','layouts/seller/pages/sents')->name('sentsS');
Route::view('profile-seller','layouts/seller/pages/profile')->name('profileS');

//System Login Autenticación
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login');
Auth::routes();

Route::get('test',function(){
  $user = new \App\User;
  $user->cod = '19833903';
  $user->name = 'Juan Edgardo';
  $user->apellido = 'Quezada Silva';
  $user->comuna = 'Temuco';
  $user->direccion = 'Villa El trebol, Labranza';
  $user->fono = ' NO agregado';
  $user->email = 'edgardo@gmail.com';
  $user->rol = 'vendedor';
  $user->password = bcrypt('12345');
  $user->save();

  return $user;
});
Route::get('test2',function(){
  $client->cod_vendedor = '19833903';
  $client->nombre = 'Sara';
  $client->apellido = 'Esparza';
  $client->comuna = 'Temuco';
  $client->direccion = 'Villa el Trebol, Labranza';
  $client->fono = '45956878';
  $client->email = 'sara@gmail.com';
  $client->timestamps();
  $user->save();
  return $user;
});
Auth::routes();
