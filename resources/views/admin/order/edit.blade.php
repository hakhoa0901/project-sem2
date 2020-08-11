@extends('admin.admin_layout')

@section('content')
    <h1>Oder form</h1>
    <form action="/admin/orders/{{$obj->id}}" method="post">
        @method('PUT')
        @csrf
        <div>
            Id<input type="text" name="name" value="{{$obj->id}}">
        </div>
        <div>
            Created_by<input type="text" name="name" value="{{$obj->created_by}}">
        </div>
        <div>
            TotalPrice <input type="text" name="description" value="{{$obj->totalPrice}}">
        </div>
        <div>
            ShipName <input type="text" name="description" value="{{$obj->shipName}}">
        </div>
        <div>
            ShipPhone <input type="text" name="description" value="{{$obj->shipPhone}}">
        </div>
        <div>
            Payment_type <input type="text" name="description" value="{{$obj->payment_type}}">
        </div>
        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>
@endsection
