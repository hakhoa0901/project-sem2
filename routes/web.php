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
Route::get('/', 'HomeController@index');
Route::get('/detail', 'HomeController@detail');
Route::get('/home', 'HomeController@index');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');
Route::get('/about', 'HomeController@about');
Route::get('/cart', 'HomeController@cart');
Route::get('/contact', 'HomeController@contact');
Route::get('/men', 'HomeController@men');
Route::get('/other', 'HomeController@other');
Route::get('/women', 'HomeController@women');



//backend
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('/product_list', 'AdminController@product_list');
    Route::get('/product_create', 'AdminController@product_create');
    Route::get('/category_list', 'AdminController@category_list');
    Route::get('/category_create', 'AdminController@category_create');
    Route::get('/user_list', 'AdminController@user_list');
    Route::get('/user_create', 'AdminController@user_create');
    Route::get('/cart_list', 'AdminController@cart_list');
});
