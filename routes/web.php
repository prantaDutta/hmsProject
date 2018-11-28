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
Route::get('/','HomeController@home');

Route::get('about','HomeController@about');

Route::get('service','HomeController@service');

Route::get('admin','HomeController@admin');

Route::get('admin/dashboard','HomeController@admin');

Route::get('admin/details','HomeController@details');

