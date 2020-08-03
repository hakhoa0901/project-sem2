@extends('admin.admin_layout')

@section('content')
    <div class="row">
        <div class="col">
            <h4 class="mb-3">
                <i class="fas fa-stream"></i> List Brands
            </h4>
        </div>
    </div>
    <div class="row mb-2 mt-2">
        <div class="col-4">
        </div>
        <div class="col-4">
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
                                <td><a href="/categories/{{$obj->id}}">Detail</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                    <a href="/categories/{{$obj->id}}/edit">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;
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
