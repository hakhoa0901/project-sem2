@extends('admin.admin_layout')

@section('content')
    <h1>Category form</h1>
    <form action="/admin/categories/{{$obj->id}}" method="post">
        @method('PUT')
        @csrf
        <div>
            Name <input type="text" name="name" value="{{$obj->name}}">
        </div>
        <div>
            Description <input type="text" name="description" value="{{$obj->description}}">
        </div>

        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>
@endsection
