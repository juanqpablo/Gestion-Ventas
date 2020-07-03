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
Route::view('product','layouts/admin/pages/product')->name('product');
Route::view('profile','layouts/admin/pages/profile')->name('profile');
Route::view('orders','layouts/admin/pages/orders')->name('orders');
Route::view('sents','layouts/admin/pages/sents')->name('sents');

//Routes view Seller
Route::view('seller','home/seller/home')->name('seller');
Route::view('product-seller','layouts/seller/pages/product')->name('productS');
Route::view('orders-seller','layouts/seller/pages/orders')->name('ordersS');
Route::view('sents-seller','layouts/seller/pages/sents')->name('sentsS');
Route::view('profile-seller','layouts/seller/pages/profile')->name('profileS');

Route::view('error','layouts/404');

//System Login Autenticación
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//Auth::routes();

//MODULO USUARIO
Route::get('users','UserController@MostarUsuarios')->name('users');//LISTAR
Route::post('register-user', 'UserController@store')->name('registerUsr');//INGRESAR
Route::post('user/{id?}','UserController@update')->name('updateUsr');//ACTUALIZAR
Route::post('user-d/{id2?}','UserController@destroy')->name('deleteUsr');//BORRAR

//MODULO CLIENTE
Route::get('client','ClientController@MostrarClientes')->name('client');//listar Admin
Route::get('client-seller','ClientController@MostrarClientes')->name('clientS');//Listar vendedor
Route::post('register-client', 'ClientController@store')->name('registerClient');//INGRESAR vendedor
Route::post('client-e/{id?}','ClientController@update')->name('updateClientA');//ACTUALIZAR admin
Route::post('client-seller-e/{id?}','ClientController@update')->name('updateClientV');//ACTUALIZAR vendedor
Route::post('client-d/{id?}','ClientController@destroy')->name('deleteClientA');//BORRAR Admin
Route::post('client-seller-d/{id?}','ClientController@destroy')->name('deleteClientV');//BORRAR vendedor


// Route::get('test',function(){
//   $user = new \App\User;
//   $user->cod = '235';
//   $user->name = 'Karina';
//   $user->apellido = 'Sanchez';
//   $user->comuna = 'Temuco';
//   $user->direccion = 'Los Talletes 01351';
//   $user->fono = ' NO agregado';
//   $user->email = 'karina@gmail.com';
//   $user->rol = 'administrador';
//   $user->password = bcrypt('12345');
//   $user->save();
//
//   return $user;
// });
