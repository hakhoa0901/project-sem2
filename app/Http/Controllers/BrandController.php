<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index($request){
        $listBrand = Brand::all();
        $listBrand = Brand::where('name', 'like', '%' .$request->get('keyword'). '%')->orderBy('created_at', 'DESC')->paginate(2);
        return view($this->view_prefix . '/list')->with('listBrand',$listBrand );
    }
}
