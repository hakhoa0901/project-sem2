@extends('admin.admin_layout')

@section('content')
    <h1>Product Detail</h1>
    <a href="/admin/products/{{$product->id}}">Back to list</a>
    <h3>{{$product->name}}</h3>
    <strong>{{$product->price}}</strong>
    <br>
@endsection
