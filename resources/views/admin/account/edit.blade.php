@extends('admin.admin_layout')

@section('content')
    <h1>Category form</h1>
    <form action="/admin/users/{{$obj->id}}" method="post">
        @method('PUT')
        @csrf
        <div>
            Address <input type="text" name="address" value="{{$obj->address}}">
        </div>
        <div>
            Email <input type="text" name="email" value="{{$obj->email}}">
        </div>
        <div>
            Description <input type="text" name="phone" value="{{$obj->phone}}">
        </div>
        <div>
            Status<input type="text" name="status" value="{{$obj->status}}">
        </div>
        <div>
            Type <input type="text" name="type" value="{{$obj->type}}">
        </div>
        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>
@endsection
