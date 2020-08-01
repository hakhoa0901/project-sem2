<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('user.user_index');
    }
    public function detail(){
        return view('user.detail_product');
    }
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function about(){
        return view('user.about_us');
    }

    public function cart(){
        return view('user.cart');
    }

    public function contact(){
        return view('user.contact');
    }

    public function men(){
        return view('user.men');
    }

    public function other(){
        return view('user.other');
    }

    public function women(){
        return view('user.women');
    }
}
