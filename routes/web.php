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

Route::get('/', 'ProductsController@index')->name('index');
Route::get('/product/{product}', 'ProductsController@show')->name('show');
Route::get('/filter/{id}', 'ProductsController@show')->name('filter');