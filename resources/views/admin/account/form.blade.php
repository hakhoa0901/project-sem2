@extends('admin.admin_layout')

@section('content')
    <div class="col-9">
        <div class="row">
            <div class="col">
                <h4 class="mb-3">
                    <i class="fas fa-stream"></i> Form add Account Admin
                    <small class="text-muted">Enter information</small>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="/admin/users" method="post">
                    @csrf
                    <div class="col_1_of_2 span_1_of_2">
                        <div>
                            <input type="text" id="name" name="name" value="Name" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'Name';}">
                        </div>
                        <div>
                            <input type="text" id="userName" name="userName" value="User Name"
                                    onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'UserName';}">
                        </div>
                        <div><input type="text" id="password" name="password" value="Password"
                                    onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'Password';}"></div>
                        <div><input type="text" id="email" name="email" value="E-mail" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'E-mail';}"></div>
                    </div>
                    <div class="col_1_of_2 span_1_of_2">
                        <div><input type="text" id="address" name="address" value="Address" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'Address';}"></div>
                        <div><input type="text" id="phone" name="phone" value="Phone" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'Phone';}"></div>
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
