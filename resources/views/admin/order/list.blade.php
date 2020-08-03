@extends('admin.admin_layout')

@section('content')
    <div class="row">
        <div class="col">
            <h4 class="mb-3">
                <i class="fas fa-stream"></i> List order
            </h4>
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
                        <td><a href="/admin/orders/{{$obj->id}}">Detail</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="/admin/orders/{{$obj->id}}/edit">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="#" class="btn-delete" id="delete-{{$obj->id}}">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
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
