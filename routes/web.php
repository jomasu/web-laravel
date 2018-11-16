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
Route::get('/agregar', 'addProductController@index')->name('agregar');
Route::get('/inicio', 'InicioController@index')->name('inicio');
Route::get('images-upload', 'HomeController@imagesUpload');
Route::post('images-upload', 'HomeController@imagesUploadPost')->name('images.upload');

