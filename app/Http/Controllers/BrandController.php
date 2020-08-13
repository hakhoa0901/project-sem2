<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $view_prefix = 'admin/brands';
    /**
     * Display a listing of the resource.
     *
     * @param $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Brand::all();
        $list = Brand::where('name', 'like', '%' .$request->get('keyword'). '%')->orderBy('created_at', 'DESC')->paginate(5);
        return view($this->view_prefix.'/list')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->view_prefix . '/form')->with('myErrors01', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Brand();
        $obj->name = $request->get('name');
        $obj->save();
        return redirect('/' . $this->view_prefix);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Brand::find($id);
        return view($this->view_prefix . '/detail')->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Brand::find($id);
        if ($obj == null) {
            return view('error/not-found');
        }
        return view($this->view_prefix . '/edit')->with('obj', $obj);
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
        $obj = Brand::find($id);
        if ($obj == null) {
            return view('error/not-found');
        }
        $obj->name = $request->get('name');
        $obj->save();
        return redirect('/' . $this->view_prefix);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Brand::find($id);
        if ($obj == null) {
            abort(404);
        }
        $obj->delete(); // cấm
        abort(200);
    }
}
