@extends('admin.admin_layout')

@section('content')
    <h1>Category Detail</h1>
    <a href="/admin/orders">Back to list</a>
    <h3>{{$obj->}}</h3>
    <h3>{{$obj->name}}</h3>
    <h3>{{$obj->name}}</h3>
    <h3>{{$obj->name}}</h3>
    <br>
@endsection
