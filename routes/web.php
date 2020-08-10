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

Route::get('/detail', 'HomeController@detail');
Route::get('/', 'HomeController@home');
Route::get('/cart', 'HomeController@cart');

Route::prefix('/admin')->group(function () {
    Route::resource('/categories', 'CategoryController');
    Route::resource('/products', 'ProductController');
    Route::resource('/users', 'AccountController');
    Route::resource('/orders', 'OrderController');
});

//Route::middleware(['middleware.checkAcc'])->group(function () {
//});

Route::get('/login', 'AccountController@login');
Route::post('/login', 'AccountController@processLogin');

Route::get('/register', 'AccountController@register');
Route::post('/register', 'AccountController@userProcessRegister');

//Route::get('/shopping-cart/add', 'CartController@add');
//Route::get('/shopping-cart/remove', 'CartController@remove');
//Route::get('/shopping-cart/show', 'CartController@show');
//Route::post('/shopping-cart/submit', 'CartController@submit');


//
//////frontend
////Route::get('/', 'HomeController@index');
////Route::get('/detail', 'HomeController@detail');
////Route::get('/home', 'HomeController@index');
////Route::get('/login', 'HomeController@login');
////Route::get('/register', 'HomeController@register');
////Route::get('/about', 'HomeController@about');
Route::get('/cart', 'HomeController@cart');
Route::get('/contact', 'HomeController@contact');
//Route::get('/men', 'HomeController@men');
////Route::get('/other', 'HomeController@other');
//Route::get('/women', 'HomeController@women');
//Route::get('/delivery', 'HomeController@delivery');
//Route::get('/delivery1', 'HomeController@delivery1');
//
//
//
////backend
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index');
//    Route::get('/product_list', 'AdminController@product_list');
//    Route::get('/product_create', 'AdminController@product_create');
//    Route::get('/category_list', 'AdminController@category_list');
//    Route::get('/category_create', 'AdminController@category_create');
//    Route::get('/user_list', 'AdminController@user_list');
//    Route::get('/user_create', 'AdminController@user_create');
//    Route::get('/cart_list', 'AdminController@cart_list');
});
