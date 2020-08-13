@extends('admin.admin_layout')

@section('content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách sản phẩm
            </div>
            <div class="table-responsive">
                <div class="row w3-res-tb">
                    <div class="col-sm-9 m-b-xs">
                    </div>
                    <div class="col-sm-3 m-b-xs">
                        <select class="input-sm form-control w-sm inline v-middle">
                            <option value="0">Bulk action</option>
                            <option value="1"><a href="javascript:void(0)" id="delete-all">Delete All</a></option>
                            <option value="2">Bulk edit</option>
                            <option value="3">Export</option>
                        </select>
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
                                        <input type="checkbox" class="product-checkbox check-item" value="">
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
                                    <td><a href="/admin/orders/{{$obj->id}}"
                                           class="text-primary mr-1 badge badge-grey">Detail</a>
                                        <a href="/admin/orders/{{$obj->id}}/edit"
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
    <script src="{{asset("hello.js")}}"></script>
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
