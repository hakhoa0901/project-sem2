@extends('admin.admin_layout')

@section('content')
    <h1>Category Detail</h1>
    <a href="/admin/users">Back to list</a>
    <h3>{{$obj->name}}</h3>
    <h3>{{$obj->address}}</h3>
    <h3>{{$obj->email}}</h3>
    <h3>{{$obj->phone}}</h3>
    <br>
@endsection
