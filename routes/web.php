<?php

use Illuminate\Support\Facades\Route;

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
//frontend
Route::get('/Home', 'HomeController@index');




//backend
Route::get('/admin ', 'AdminController@index');
Route::get('/dashboard ', 'AdminController@show_dashboard');
