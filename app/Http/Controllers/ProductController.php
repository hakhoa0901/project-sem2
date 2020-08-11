<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use DB;

class ProductController extends Controller
{
    private $view_prefix = 'admin/products';


//        public function customerIndex(Request $request)
//        {
////            // tạo biến data là một mảng chứa dữ liệu trả về.
////            $data = array();
////            $product_list = Product::all();
////            $data['list'] = $product_list;
////            return view('user.men')
////                ->with($data);
//            $products = DB::table('products')-> get();
//            return view('user.men', compact('products'));
//        }

    public function index(Request $request)
    {
        // tạo biến data là một mảng chứa dữ liệu trả về.
        $data = array();
        $data['category_id'] = 0;
        $data['keyword'] = '';
        $categories = Category::all();
        $product_list = Product::query();
        if ($request->has('category_id') && $request->get('category_id') != 0) {
            $data['category_id'] = $request->get('category_id');
            $product_list = $product_list->where('category_id', '=', $request->get('category_id'));
        }
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $product_list = $product_list->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $product_list = $product_list->whereBetween('created_at', [$from, $to]);
        }
        $data['list'] = $product_list->get();
        $data['categories'] = $categories;
        return view('admin.products.list')
            ->with($data);
    }

    public function show($id)
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
        $colours= [
           ''=>trans('select'),
            'red'=>'red',
            'green'=>'green',
            'blue'=>'blue',
            'yellow'=>'yellow',
            'violet'=>'violet',
            'orange'=>'orange',
            'gray'=>'gray'
    ];
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
        $thumbnails = $request->get('thumbnails');
        foreach ($thumbnails as $thumbnail) {
            $product->thumbnail .= $thumbnail . ',';
        }
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
        $thumbnails = $request->get('thumbnail');
        $product->thumbnail = '';
        foreach ($thumbnails as $thumbnail) {
            $product->thumbnail .= $thumbnail . ',';
        }
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
