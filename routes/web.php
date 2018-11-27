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

Route::get('/', 'InicioController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/list', 'ProductController@index')->name('product.list');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
//Route::get('/', 'CategorieController@index');



Route::get('/brand/{$id}','brandController@show')->name('brand');
Route::get('/agregar', 'ProductController@create')->name('agregar');
Route::post('/agregar/producto', 'ProductController@store')->name('agregar.producto');
Route::get('inicio', 'InicioController@index')->name('inicio');

Route::get('images-upload', 'HomeController@imagesUpload');
Route::post('images-upload', 'HomeController@imagesUploadPost')->name('images.upload');

//Rutas para carrito
Route::post('products/add', 'ProductController@addToCart')->name('products.addToCart');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/carrito/{id}/remove', 'CartController@remove')->name('cart.remove');
Route::get('/carrito/remove', 'CartController@removeAll')->name('cart.removeAll');
Route::get('/query', 'ProductController@search')->name('query');

