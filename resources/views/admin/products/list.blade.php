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
