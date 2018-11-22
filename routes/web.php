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
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductController@index');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
//Route::get('/', 'CategorieController@index');



Route::get('/brand/{$id}','brandController@show')->name('brand');
Route::get('/agregar', 'addProductController@index')->name('agregar');
Route::get('/inicio', 'InicioController@index')->name('inicio');

Route::get('images-upload', 'HomeController@imagesUpload');
Route::post('images-upload', 'HomeController@imagesUploadPost')->name('images.upload');

