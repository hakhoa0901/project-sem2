@extends('user.layouts.master')
@section('content')
    <div class="row">
        <h4 class="title">Create an Account</h4>
        <form class="form-point" id="formPoint" method="post" action="/register">
            @csrf
            <div class="col-6">
                <p>
                    <label for="name">Name </label>
                    <input id="name" type="text" name="name">
                    @if($errors->has('name'))
                        <div style="color: red">* {{$errors->first('name')}}</div>
                    @endif
                </p>
                <p>
                    <label for="userName">User Name </label>
                    <input id="userName" type="text" name="userName">
                    @if($errors->has('userName'))
                        <div style="color: red">* {{$errors->first('userName')}}</div>
                    @endif
                </p>
                <p>
                    <label for="password">Password </label>
                    <input id="password" type="password" name="password">
                    @if($errors->has('password'))
                        <div style="color: red">* {{$errors->first('password')}}</div>
                    @endif
                </p>
                <p>
                    <label for="email">E-mail </label>
                    <input id="email" type="text" name="email">
                    @if($errors->has('email'))
                        <div style="color: red">* {{$errors->first('email')}}</div>
                    @endif
                </p>
            </div>
            <div class="col-6">
                <p>
                    <label for="address">Address </label>
                    <input id="address" type="text" name="address">
                    @if($errors->has('address'))
                        <div style="color: red">* {{$errors->first('address')}}</div>
                    @endif
                </p>
                <p>
                    <label for="phone">Phone </label>
                    <input id="phone" type="number" name="phone">
                    @if($errors->has('phone'))
                        <div style="color: red">* {{$errors->first('phone')}}</div>
                    @endif
                </p>
                <button value="Submit" class="Submit" type="submit">Submit</button>
                <button value="Reset" class="Reset" type="reset">Reset</button>
            </div>
        </form>
    </div>
@endsection
