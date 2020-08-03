@extends('admin.admin_layout')

@section('content')
    <h1>Product form</h1>
    <form action="/admin/products/{{$obj->id}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$product->id}}">
        <div>
            Name <input type="text" name="name" value="{{$product->name}}">
        </div>
        <div>
            Price <input type="text" name="price" value="{{$product->price}}">
        </div>
        <div>
            Thumbnail <input type="text" name="thumbnail" value="{{$product->thumbnail}}">
            <img src="{{$product->thumbnail}}" style="width: 100px" alt="">
        </div>
        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>
@endsection
