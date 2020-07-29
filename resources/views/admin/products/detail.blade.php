@extends('admin.admin_layout')

@section('content')
    <h1>Product Detail</h1>
    <a href="/product/list">Back to list</a>
    <h3>{{$product->name}}</h3>
    <strong>{{$product->price}}</strong>
    <br>
    <img src="{{$product->thumbnail}}" alt="">
@endsection
