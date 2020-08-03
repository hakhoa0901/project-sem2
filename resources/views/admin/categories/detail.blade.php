@extends('admin.admin_layout')

@section('content')
    <h1>Category Detail</h1>
    <a href="/admin/categories">Back to list</a>
    <h3>{{$obj->name}}</h3>
    <br>
@endsection
