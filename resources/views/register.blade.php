@extends('user.layouts.master')
@section('content')
    <div class="register_account">
        <div class="wrap">
            <h4 class="title">Create an Account</h4>
            <form class="form-point"  id="formPoint" method="post" action="/register">
                @csrf
                <div class="col_1_of_2 span_1_of_2">
                    <div><input type="text" id="name" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"></div>
                    <div><input type="text" id="userName" name="userName" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'UserName';}"></div>
                    <div><input type="text" id="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"></div>
                    <div><input type="text" id="email" name="email" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}"></div>
                </div>
                <div class="col_1_of_2 span_1_of_2">
                    <div><input type="text" id="address" name="address" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></div>
                    <div><input type="text" id="phone" name="phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></div>
                </div>
                <button class="grey">Submit</button>
                <div class="clear"></div>
            </form>
        </div>
    </div>
@endsection
