@extends('user.layouts.master')
@section('content')
    <div class="row">
    <section class="register_account">
        <section class="wrap">
            <form class="form-point" id="formPoint" method="post" action="/register">
                @csrf
                <div class="col_1_of_2 span_1_of_2">
                    <h4 class="title">Create an Account</h4>
                    <p>
                        <label for="name">Name </label>
                        <input id="name" type="text" class="inputbox" size="18" autocomplete="off" name="name">
                    @if($errors->has('name'))
                        <div style="color: #ff0000">* {{$errors->first('name')}}</div>
                        @endif
                        </p>
                        <p>
                            <label for="userName">User Name </label>
                            <input id="userName" type="text" class="inputbox" size="18" autocomplete="off"
                                   name="userName">
                        @if($errors->has('userName'))
                            <div style="color: red">* {{$errors->first('userName')}}</div>
                            @endif
                            </p>
                            <p>
                                <label for="password">Password </label>
                                <input id="password" type="password" class="inputbox" size="18" autocomplete="off"
                                       name="password">
                            @if($errors->has('password'))
                                <div style="color: red">* {{$errors->first('password')}}</div>
                                @endif
                                </p>
                                <p>
                                    <label for="email">E-mail </label>
                                    <input id="email" type="text" class="inputbox" size="18" autocomplete="off"
                                           name="email">
                                @if($errors->has('email'))
                                    <div style="color: red">* {{$errors->first('email')}}</div>
                                    @endif
                                    </p>
                </div>
                <div class="col_1_of_2 span_1_of_2">
                    <p>
                        <label for="address">Address </label>
                        <input id="address" type="text" class="inputbox" size="18" autocomplete="off"
                               name="address">
                    @if($errors->has('address'))
                        <div style="color: red">* {{$errors->first('address')}}</div>
                        @endif
                        </p>
                        <p>
                            <label for="phone">Phone </label>
                            <input id="phone" type="number" class="inputbox" size="18" autocomplete="off"
                                   name="phone">
                        @if($errors->has('phone'))
                            <div style="color: red">* {{$errors->first('phone')}}</div>
                            @endif
                            </p>
                            <button value="Submit" class="Submit" type="submit">Submit</button>
                            <button value="Reset" class="Reset" type="reset">Reset</button>
                </div>
            </form>

        </section>
    </section>
    </div>
@endsection
