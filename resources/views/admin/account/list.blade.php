@extends('admin.admin_layout')

@section('content')
    <div class="row">
        <div class="col">
            <h4 class="mb-3">
                <i class="fas fa-stream"></i> List Account
            </h4>
{{--            <a href="/categories"><i class=""></i>&nbsp;&nbsp;Add category</a>--}}
        </div>
    </div>
{{--    <div class="row mb-2 mt-2">--}}
{{--        <div class="col-4">--}}
{{--        </div>--}}
{{--        <div class="col-4">--}}
{{--            <form action="/admin/users" method="get">--}}
{{--                <div class="form-group float-left mr-2">--}}
{{--                    <select name="categoryId" class="form-control">--}}
{{--                        <option value="1">Category 01</option>--}}
{{--                        <option value="1">Category 02</option>--}}
{{--                        <option value="1">Category 03</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group float-left mr-2">--}}
{{--                    <input type="text" class="form-control mb-2 mr-sm-2" name="keyword"--}}
{{--                           placeholder="Enter keyword to search" value="">--}}
{{--                    <input type="hidden" name="currentPage" value="">--}}
{{--                </div>--}}
{{--                <div class="form-group float-left">--}}
{{--                    <button type="submit" id="btn-search" class="btn btn-outline-primary mb-2">Search</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
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
                            {{--            <a onclick="return confirm('Are you sure?')" href="/categories/{{$obj->id}}">Delete</a>--}}
                            {{--            <form action="/categories/{{$obj->id}}" method="POST">--}}
                            {{--                @method('DELETE')--}}
                            {{--                @csrf--}}
                            {{--                --}}{{-- Thẻ button default submit form, ko muốn submit thì thêm type=button--}}
                            {{--                --}}{{--                <button>Delete User</button>--}}
                            {{--                --}}{{--                <input type="submit" value="Delete">--}}
                            {{--                <a href="#" onclick="confirm('Are you sure?')?parentNode.submit():''">Delete</a>--}}
                            {{--            </form>--}}
                            <a href="#" class="btn-delete" id="delete-{{$obj->id}}">Delete with JS</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
{{--    <div class="row">--}}
{{--        <div class="form-group mr-3">--}}
{{--            <select class="form-control mr-2" id="select-action">--}}
{{--                <option value="0">--Chọn thao tác--</option>--}}
{{--                <option value="-1">Xoá</option>--}}
{{--                <option value="1">Phát hành</option>--}}
{{--            </select>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <button type="button" class="btn btn-outline-primary mb-2" id="btn-apply-all">Apply to all</button>--}}
{{--        </div>--}}

{{--    </div>--}}
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
