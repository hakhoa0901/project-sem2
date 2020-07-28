<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{
    private $view_prefix = 'product';

    public function getList()
    {
        $listProduct = Product::all();
        return view($this->view_prefix .'/list')->with('listProduct', $listProduct);
    }

    public function getDetail($id)
    {
        $product = Product::find($id);
        return view($this->view_prefix .'/detail')->with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listCategory = Category::all();
        return view($this->view_prefix .'/form')->with('listCategory', $listCategory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->categoryId = $request->get('categoryId');
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->thumbnail = $request->get('thumbnail');
        $product->save();
        return redirect($this->view_prefix .'/list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return view('error/not-found');
        }
        return view($this->view_prefix .'/edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($request->get('id'));
        if ($product == null) {
            return view('error/not-found');
        }
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->thumbnail = $request->get('thumbnail');
        $product->save();
        return redirect($this->view_prefix .'/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return view('error/not-found');
        }
        $product->delete(); // cấm
        return redirect($this->view_prefix .'/list');
    }
}
