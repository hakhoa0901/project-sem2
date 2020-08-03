@extends('admin.admin_layout')

@section('content')
    <div class="col-9">
        <div class="row">
            <div class="col">
                <h4 class="mb-3">
                    <i class="fas fa-stream"></i> Form order
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="/admin/orders" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="created_by">Created By</label>
                            <input type="text" class="form-control" id="" name="created_by">
                            @if ($errors->has('created_by'))
                                <span class="text-danger">* {{$errors->first('created_by')}}</span>
                            @endif
                            <label for="totalPrice">TotalPrice</label>
                            <input type="text" class="form-control" id="" name="totalPrice">
                            <label for="shipName">Ship Name</label>
                            <input type="text" class="form-control" id="" name="shipName">
                            <label for="shipAddress">Ship Address</label>
                            <input type="text" class="form-control" id="" name="shipAddress">
                            <label for="shipPhone">Ship Phone</label>
                            <input type="text" class="form-control" id="" name="shipPhone">
                            <label for="payment_type">Payment Type</label>
                            <input type="text" class="form-control" id="" name="payment_type">
                            <label for="Status">Status</label>
                            <input type="text" class="form-control" id="" name="status">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
