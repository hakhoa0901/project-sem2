@extends('admin.admin_layout')
@section('content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách sản phẩm
            </div>
            <form action="/admin/products" method="get" id="product_form" class="form-horizontal">
                <div class="row w3-res-tb">
                    <div class="col-sm-3 m-b-xs">
                        <select name="category_id" class="input-sm form-control w-sm inline v-middle"
                                id="categorySelect">
                            <option value="0">All</option>
                            @foreach($categories as $cate)
                                <option
                                    value="{{$cate->id}}" {{$cate->id == $category_id ? 'selected':''}}>{{$cate->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-1 m-b-xs"></div>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input value="{{$keyword}}" type="text" name="keyword" class="input-sm form-control"
                                   placeholder="Search by keyword">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i>Search</button>
                            <input type="submit" style="visibility: hidden;"/>
                        </span>
                        </div>
                    </div>
                    <div class="col-sm-1 m-b-xs"></div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="text" name="dates" class="input-sm form-control">
                            <input type="hidden" name="start">
                            <input type="hidden" name="end">

                        </div>
                    </div>
                </div>
            </form>
            {{--table--}}
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
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th scope="col">created By</th>
                                <th scope="col">Images</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $product)
                                <tr>
                                    <th scope="row">
                                        <input type="checkbox" class="product-checkbox check-item" value="">
                                    </th>
                                    <th class="border-top-0 px-2 py-4">{{$product->id}}</th>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->created_by}}</td>
                                    </td>
                                    <td>
                                        @foreach($product->large_photos as $p)
                                            <img src="{{$p}}" alt="" class="rounded-circle" width="70" height="60">
                                    @endforeach
                                    <td>{{ $product->status}}</td>
                                    <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                        <a href="/admin/products/{{$product->id}}"
                                           class="text-primary mr-1 badge badge-grey">Detail</a>
                                        <a href="/admin/products/{{$product->id}}/edit"
                                           class="text-orange mr-1 badge badge-warning">Edit</a>
                                        <a href="#" class="btn-delete badge badge-danger" id="delete-{{$product->id}}">Delete</a>
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
        $('input[name="dates"]').daterangepicker(
            {
                locale: {
                    format: 'DD/MM/YYYY'
                },
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }
        );

        $('#categorySelect').change(function () {
            $('#product_form').submit();
        })
        $('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {
            $('input[name="start"]').val(picker.startDate.format('YYYY-MM-DD'));
            $('input[name="end"]').val(picker.endDate.format('YYYY-MM-DD'));
            $('#product_form').submit();
        });


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
