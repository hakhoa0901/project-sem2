@extends('admin.admin_layout')

@section('content')
    <h1>List Product</h1>
    <ul>
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
                                                    <option value="{{$cate->id}}" {{$cate->id == $category_id ? 'selected':''}}>{{$cate->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Search by keyword</label>
                                            <input value="{{$keyword}}" type="text" name="keyword" class="form-control" placeholder="Search by keyword">
                                            <input type="submit" style="visibility: hidden;" />
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
            <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">
                            <input type="checkbox" id="check-all">
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
                <th scope="row">
                    <input type="checkbox" class="check-item" value="">
                </th>
                <th class="border-top-0 px-2 py-4">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->created_by}}</td>
               </td> <td><img class="img-thumbnail" src="{{$product->photo}}" width="150px" alt=""></td>
                <td>{{ $product->status}}</td>
                <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                    <a class="text-primary mr-1" href="/admin/products/{{$product->id}}">Detail</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="text-orange mr-1" href="/admin/products/{{$product->id}}/edit">Edit</a>&nbsp;&nbsp&nbsp;&nbsp;
                    <a href="#"  class="text-danger mr-1" id="delete-{{$product->id}}">Delete</a></td>
            </tr>
        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </ul>
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
        $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
            $('input[name="start"]').val(picker.startDate.format('YYYY-MM-DD'));
            $('input[name="end"]').val(picker.endDate.format('YYYY-MM-DD'));
            $('#product_form').submit();
        });
    </script>
@endsection
