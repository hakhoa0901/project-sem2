@extends('admin.admin_layout')

@section('content')
    <h1>Category Detail</h1>
    <a href="/admin/orders">Back to list</a>
    <h3>{{$obj->created_by}}</h3>
    <h3>{{$obj->totalPrice}}</h3>
    <h3>{{$obj->shipName}}</h3>
    <h3>{{$obj->shipAddress}}</h3>
    <h3>{{$obj->shipPhone}}</h3>
    <h3>{{$obj->payment_type}}</h3>
    <br>
@endsection
