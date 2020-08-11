@extends('admin.admin_layout')

@section('content')
    <div class="row">
        <div class="col">
            <h4 class="mb-3">
                <i class="fas fa-stream"></i> List Account
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">
                        <input type="checkbox" id="check-all">
                    </th>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Status</th>
                    <th scope="col">TYpe</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $obj)
                    <tr>
                        <th scope="row">
                            <input type="checkbox" class="check-item" value="">
                        </th>
                        <th scope="row">{{$obj->id}}</th>
                        <td>{{$obj->name}}</td>
                        <td>{{$obj->userName}}</td>
                        <td>{{$obj->address}}</td>
                        <td>{{$obj->email}}</td>
                        <td>{{$obj->phone}}</td>
                        <td>{{$obj->status}}</td>
                        <td>{{$obj->type}}</td>
                        <td><a href="/admin/users/{{$obj->id}}">Detail</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="/admin/users/{{$obj->id}}/edit">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="#" class="btn-delete" id="delete-{{$obj->id}}">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <nav aria-label="Page navigation example" class="float-right">
                {{$list->links()}}
            </nav>
        </div>
    </div>
    </div>

    <script src="{{asset("hello.js")}}"></script>
@endsection
