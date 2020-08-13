@extends('admin.admin_layout')
@section('content')
    {{--    <div class="row">--}}
    {{--        <div class="col-8"></div>--}}
    {{--        <div class="col-4">--}}
    {{--            <nav aria-label="Page navigation example" class="float-right">--}}
    {{--                {{$list->links()}}--}}
    {{--            </nav>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    </div>--}}

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh Sách Người Dùng
            </div>
            <div class="table-responsive">
                <div class="row w3-res-tb">
                    <div class="col-sm-9 m-b-xs">
                    </div>
                    <div class="col-sm-3 m-b-xs">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <button class="dropdown-toggle" id="dd1" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dd1">
                                    <li><a class="dropdown-item" href="javascript:void(0)" id="delete-all">Delete
                                            All</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                @if(sizeof($list) > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered b-t b-light">
                            <thead>
                            <tr class="border-0">
                                <th class="">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkAll" value="0">
                                        <label class="custom-control-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">UserName</th>
                                <th scope="col">Address</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Status</th>
                                <th scope="col">Type</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $obj)
                                <tr>
                                    <th scope="row">
                                        <input type="checkbox" class="product-checkbox check-item" value="">
                                    </th>
                                    <th scope="row">{{$obj->id}}</th>
                                    <td>{{$obj->name}}</td>
                                    <td>{{$obj->userName}}</td>
                                    <td>{{$obj->address}}</td>
                                    <td>{{$obj->email}}</td>
                                    <td>{{$obj->phone}}</td>
                                    <td>{{$obj->status}}</td>
                                    <td>{{$obj->type}}</td>
                                    <td><a href="/admin/users/{{$obj->id}}"
                                           class="text-primary mr-1 badge badge-grey">Detail</a>
                                        <a href="/admin/users/{{$obj->id}}/edit"
                                           class="text-orange mr-1 badge badge-warning">Edit</a>
                                        <a href="#" class="btn-delete badge badge-danger" id="delete-{{$obj->id}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-sm-5 text-center">
                            </div>
                            <div class="col-sm-7 text-right text-center-xs">
                                <ul class="pagination pagination-sm m-t-none m-b-none">
                                    {{$list->links()}}
                                </ul>
                            </div>
                        </div>
                    </footer>
                @else
                    <div class="table-responsive">
                        <div class="text-center p-2">Hiện tại hệ thống không có sản phẩm nào, <a
                                href="/admin/products/create">Click vào đây để thêm mới sản phẩm</a></div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script src="{{asset("deleteProduct.js")}}"></script>
@endsection
@section('script')
    <script>
        // bắt sự kiện vào checkbox check all.
        $('#checkAll').click(function () {
// chuyển trạng thái check của tất cả checkbox có class 'product-checkbox'
// theo trạng thái của checkbox checkall.
            $('.product-checkbox').prop('checked', $(this).prop('checked'));
        });
        // khi click nút delete all
        $('#delete-all').click(function () {
// lấy ra danh sách ids của các checkbox đã checked.
            var deleteIds = $('input:checkbox:checked').map(function () {
                return $(this).val();
            }).get();
// trường hợp chưa sản phẩm nào được check thì return.
            if (deleteIds.length == 0) {
                alert('Please choose at least 1 product!');
                return;
            }
// gửi request lên server yêu cầu xoá tất cả sản phẩm được check.
            $.ajax({
                'url': '/products/delete-all',
                'method': 'POST',
                'data': {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    'ids': deleteIds
                },
                'success': function () {
// Thông báo thành công, reload lại trang.
                    alert('Action success');
                    location.reload();
                },
                'error': function () {
                    alert('Action fails');
                }
            })
        });
    </script>
@endsection
