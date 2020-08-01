@extends('admin.admin_layout')

@section('content')
    <h1>List Product</h1>
    <ul>
        @foreach($listProduct as $product)
            <tr>
                <th scope="row">
                    <input type="checkbox" class="check-item" value="">
                </th>
                <th scope="row">{{$product->id}}</th>
                <td><img class="img-thumbnail" src="{{$product->photo}}" width="150px" alt=""></td>
                <td>{{$product->name}}</td>
                <td>{!! $product->description !!}</td>
                <td><a href="/categories/{{$product->id}}">Detail</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="/categories/{{$product->id}}/edit">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    {{--            <a onclick="return confirm('Are you sure?')" href="/categories/{{$obj->id}}">Delete</a>--}}
                    {{--            <form action="/categories/{{$obj->id}}" method="POST">--}}
                    {{--                @method('DELETE')--}}
                    {{--                @csrf--}}
                    {{--                --}}{{-- Thẻ button default submit form, ko muốn submit thì thêm type=button--}}
                    {{--                --}}{{--                <button>Delete User</button>--}}
                    {{--                --}}{{--                <input type="submit" value="Delete">--}}
                    {{--                <a href="#" onclick="confirm('Are you sure?')?parentNode.submit():''">Delete</a>--}}
                    {{--            </form>--}}
                    <a href="#" class="btn-delete" id="delete-{{$product->id}}">Delete with JS</a></td>
            </tr>
        @endforeach
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
