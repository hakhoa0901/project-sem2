@extends('admin.admin_layout')

@section('content')
    <div class="row">
        <div class="col">
            <h4 class="mb-3">
                <i class="fas fa-stream"></i> List order
            </h4>
{{--            <a href="/"><i class=""></i>&nbsp;&nbsp;Add category</a>--}}
        </div>
    </div>
{{--    <div class="row mb-2 mt-2">--}}
{{--        <div class="col-4">--}}
{{--        </div>--}}
{{--        <div class="col-4">--}}
{{--            <form action="/categories" method="get">--}}
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
                    <th scope="col">Created_by</th>
                    <th scope="col">TotalPrice</th>
                    <th scope="col">ShipName</th>
                    <th scope="col">ShipAddress</th>
                    <th scope="col">ShipPhone</th>
                    <th scope="col">Payment-type</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $obj)
                    <tr>
                        <th scope="row">
                            <input type="checkbox" class="check-item" value="">
                        </th>
                        <th scope="row">{{$obj->id}}</th>
                        <td>{{$obj->creadted_by}}</td>
                        <td>{{$obj->totalPrice}}</td>
                        <td>{{$obj->shipName}}</td>
                        <td>{{$obj->shipAddress}}</td>
                        <td>{{$obj->shipPhone}}</td>
                        <td>{{$obj->payment_type}}</td>
                        <td>{{$obj->status}}</td>
                        <td>{{$obj->created_at}}</td>
                        <td>{{$obj->updated_at}}</td>
                        <td><a href="/admin/order/{{$obj->id}}">Detail</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="/admin/order/{{$obj->id}}/edit">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;
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
