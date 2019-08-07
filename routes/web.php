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

Route::get('/', 'BaseController@getindex');

Auth::routes();

Route::get('/posts', 'PostController@getPosts');

Route::get('/basket', 'BasketController@getIndex');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts/{id}', 'CatalogController@getIndex');