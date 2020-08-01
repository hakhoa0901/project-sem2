
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
Route::get('/', 'HomeController@home');
Route::get('/detail', 'HomeController@detail');

Route::prefix('/admin')->group(function () {
    Route::resource('/categories', 'CategoryController');
    Route::resource('/products', 'ProductController');
    Route::resource('/users', 'AccountController');
    Route::resource('/orders', 'OrderController');
});

//Route::middleware(['middleware.checkAcc'])->group(function () {
//
//});

Route::get('/login', 'AccountController@login');
Route::post('/login', 'AccountController@processLogin');

Route::get('/register', 'AccountController@register');
Route::post('/register', 'AccountController@userProcessRegister');



