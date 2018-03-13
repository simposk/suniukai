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

Auth::routes();
Route::resource('ads', 'AdsController');

Route::get('/', 'StaticPagesController@index');
Route::get('/pradinis', 'StaticPagesController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/ads', 'UsersController@index');
Route::get('/users/{user}', 'UsersController@show');
