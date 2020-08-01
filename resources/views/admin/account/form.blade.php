@extends('admin.admin_layout')

@section('content')
    <div class="col-9">
        <div class="row">
            <div class="col">
                <h4 class="mb-3">
                    <i class="fas fa-stream"></i> Form category
                    <small class="text-muted">Enter information</small>
                </h4>
{{--                <a href="/categories"><i class=""></i>&nbsp;&nbsp;List category</a>--}}
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="/admin/users" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" id="inputEmail4" name="name">
                            @if ($errors->has('name'))
                                <span class="text-danger">* {{$errors->first('name')}}</span>
                            @endif
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
