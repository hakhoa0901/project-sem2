@extends('user.layouts.master')
@section('content')
    <div class="container-fluid">
        <section class="container">
            <div class="container-page">
                <form class="form-point" id="formPoint" method="post" action="/register">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group col-lg-12">
                            <label>User Name</label>
                            <input type="text" name="userName" class="form-control" id="" value="">
                            @if($errors->has('userName'))
                                <div style="color: #ff0000">* {{$errors->first('userName')}}</div>
                            @endif
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" id="" value="">
                            @if($errors->has('password'))
                                <div style="color: #ff0000">* {{$errors->first('password')}}</div>
                            @endif
                        </div>
                        <div class="form-group col-lg-12">
                            <label>E-mail</label>
                            <input type="email" name="email" class="form-control" id="" value="">
                            @if($errors->has('email'))
                                <div style="color: #ff0000">* {{$errors->first('email')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group col-lg-12">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" id="" value="">
                            @if($errors->has('name'))
                                <div style="color: #ff0000">* {{$errors->first('name')}}</div>
                            @endif
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" id="" value="">
                            @if($errors->has('address'))
                                <div style="color: #ff0000">* {{$errors->first('address')}}</div>
                            @endif
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control" id="" value="">
                            @if($errors->has('phone'))
                                <div style="color: #ff0000">* {{$errors->first('phone')}}</div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary navbar-right">Register</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
