<!DOCTYPE HTML>
<html>
<head>
    <title>LEO SHOP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('user/css/form.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('user/css/fwslider.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{asset('user/js/jquery1.min.js')}}"></script>
    <!-- start menu -->
    <link href="{{asset('user/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{asset('user/js/megamenu.js')}}"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <!--start slider -->
    <link rel="stylesheet" href="{{asset('user/js/megamenu.js')}}" media="all">
    <script src="{{asset('user/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('user/js/css3-mediaqueries.js')}}"></script>
    <script src="{{asset('user/js/fwslider.js')}}"></script>
    <!--end slider -->
    <script src="{{asset('user/js/jquery.easydropdown.js')}}"></script>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
@include('user.layouts.header')

@yield('content')

@include('user.layouts.footer')
</body>
</html>
