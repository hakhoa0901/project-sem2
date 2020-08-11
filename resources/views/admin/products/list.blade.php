@extends('admin.admin_layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/admin/products" method="get" id="product_form">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlSelect1">Select category</label>
                                            <select name="category_id" class="form-control" id="categorySelect">
                                                <option value="0">All</option>
                                                @foreach($categories as $cate)
                                                    <option
                                                        value="{{$cate->id}}" {{$cate->id == $category_id ? 'selected':''}}>{{$cate->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Search by keyword</label>
                                            <input value="{{$keyword}}" type="text" name="keyword" class="form-control"
                                                   placeholder="Search by keyword">
                                            <input type="submit" style="visibility: hidden;"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Search by time</label>
                                            <input type="text" name="dates" class="form-control">
                                            <input type="hidden" name="start">
                                            <input type="hidden" name="end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <button class="dropdown-toggle" id="dd1" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dd1">
                                       <li><a class="dropdown-item" href="javascript:void(0)" id="delete-all">Delete
                                            All</a></li>
                                    </ul>
                                </li>
                            </ul>
                            @if(sizeof($list) > 0)
                                <table class="table no-wrap v-middle mb-0">
                                    <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted">
                                            <div class="custom-control custom-checkbox navbar-right">
                                                <input type="checkbox" class="custom-control-input" id="checkAll"
                                                       value="0">
                                                <label class="custom-control-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">created_by</th>
                                        <th scope="col">Images</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $product)
                                        <tr>
                                            <td class="border-top-0 px-2 py-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input product-checkbox"
                                                           value="{{$product->id}}" id="checkbox_{{$product->id}}">
                                                    <label class="custom-control-label"
                                                           for="checkbox_{{$product->id}}"></label>
                                                </div>
                                            </td>
                                            <th class="border-top-0 px-2 py-4">{{$product->id}}</th>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>{{$product->created_by}}</td>
                                            </td>
                                            <td>
                                                @foreach($product->large_photos as $p)
                                                    <img src="{{$p}}" alt="" class="rounded-circle" width="70"
                                                         height="60">
                                            @endforeach
                                            <td>{{ $product->status}}</td>
                                            <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                                <a href="/admin/products/{{$product->id}}"
                                                   class="text-primary mr-1">Detail</a>
                                                <a href="/admin/products/{{$product->id}}/edit"
                                                   class="text-orange mr-1">Edit</a>
                                                <a href="#" class="btn-delete" id="delete-{{$product->id}}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div>Have no products</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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


        $(document).ready(function(){
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
@endsection
