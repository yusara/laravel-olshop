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
//     return view('welcome');
// });

Route::get('/', 'PagesController@home');

Route::get('/produk','ProdukController@index');
Route::get('/produk/{products_code}','ProdukController@show');

Route::patch('/cart/{products_code}','CartController@update');

