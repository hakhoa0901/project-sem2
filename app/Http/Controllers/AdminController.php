<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin');
    }

    public function product_list(){
        return view('admin.Product.product_list');
    }

    public function product_create(){
        return view('admin.Product.product_create');
    }

    public function category_list(){
        return view('admin.category.category_list');
    }

    public function category_create(){
        return view('admin.category.category_create');
    }

    public function user_list(){
        return view('admin.user.user_list');
    }

    public function user_create(){
        return view('admin.user.user_create');
    }

    public function cart_list(){
        return view('admin.cart.cart_create');
    }

}
