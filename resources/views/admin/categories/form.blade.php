@extends('admin.admin_layout')
@section('content')
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THÊM DANH MỤC
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="/admin/categories" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Category">TÊN DANH MỤC</label>
                                        <input type="text" class="form-control" id="" placeholder="" name="name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">* {{$errors->first('name')}}</span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-info">Save</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
@endsection
