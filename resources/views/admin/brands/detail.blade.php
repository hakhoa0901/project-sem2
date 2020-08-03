@extends('admin.admin_layout')

@section('content')
    <h1>Brands Detail</h1>
    <a href="/admin/brands">Back to list</a>
    <h3>{{$obj->name}}</h3>
    <br>
@endsection
