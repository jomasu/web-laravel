<?php

use App\Http\Controllers\ProductController;

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


Auth::routes();

Route::get('/', 'InicioController@index');
Route::get('inicio', 'InicioController@index')->name('inicio');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('images-upload', 'HomeController@imagesUpload');
Route::post('images-upload', 'HomeController@imagesUploadPost')->name('images.upload');

Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

//Route::get('/brand/{$id}','brandController@show')->name('brand');

//Route::resource('products', 'ProductController');

Route::get('/products/list', 'ProductController@index')->name('product.list');
Route::post('/agregar/producto', 'ProductController@store')->name('agregar.producto');
Route::get('/agregar', 'ProductController@create')->name('agregar');
Route::get('/products/destroy/{id}', 'ProductController@destroy')->name('products.destroy');
Route::post('/products/update/{id}', 'ProductController@update')->name('products.update');
Route::get('/products/show', 'ProductController@show')->name('products.show');
Route::get('/products/edit/{id}', 'ProductController@edit')->name('products.edit');



Route::get('/query', 'ProductController@search')->name('query');



Route::get('/contacto','ContactoController@index')->name('contacto');
Route::post('/contacto/store','ContactoController@store')->name('contacto.store');
Route::get('/contacto/create','ContactoController@create')->name('contacto.create');

Route::get('/listado','ListaProductController@index')->name('listado.producto');

//Rutas para carrito
Route::post('productos/add', 'ProductController@addToCart')->name('products.addToCart');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/carrito/remove/', 'CartController@remove')->name('cart.remove');
Route::get('/carrito/removeall', 'CartController@removeAll')->name('cart.removeAll');

