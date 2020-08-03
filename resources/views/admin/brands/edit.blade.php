@extends('admin.admin_layout')

@section('content')
    <h1>Brands form</h1>
    <form action="/admin/brands/{{$obj->id}}" method="post">
        @method('PUT')
        @csrf
        <div>
            Name <input type="text" name="name" value="{{$obj->name}}">
        </div>
        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>
@endsection
