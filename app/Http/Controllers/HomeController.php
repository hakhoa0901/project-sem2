<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('user.user_index');
    }

    public function detail(){
        return view('user.detail_product');
    }
}
