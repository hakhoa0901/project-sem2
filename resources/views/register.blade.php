@extends('user.layouts.master')
@section('content')
    <div class="register_account">
        <div class="wrap">
            <h4 class="title">Create an Account</h4>
            <form class="form-point"  id="formPoint" method="post" action="/register">
                <div class="col_1_of_2 span_1_of_2">
                    <div><input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"></div>
                    <div><input type="text" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'UserName';}"></div>
                    <div><input type="text" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"></div>
                    <div><input type="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}"></div>
                </div>
                <div class="col_1_of_2 span_1_of_2">
                    <div><input type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></div>
                    <div><input type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></div>
                </div>
                <button class="grey">Submit</button>
                <div class="clear"></div>
            </form>
        </div>
    </div>
@endsection
