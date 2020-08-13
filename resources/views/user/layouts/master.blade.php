<!DOCTYPE HTML>
<html>
    <head>
        <title>Leo shop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="/user/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/user/css/form.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="/user/js/jquery1.min.js"></script>
        <!-- start menu -->
        <link href="/user/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="/user/js/megamenu.js"></script>
        <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
        <!--start slider -->
        <link rel="stylesheet" href="/user/css/fwslider.css" media="all">
        <script src="/user/js/jquery-ui.min.js"></script>
        <script src="/user/js/css3-mediaqueries.js"></script>
        <script src="/user/js/fwslider.js"></script>
        <!--end slider -->
        <script src="/user/js/jquery.easydropdown.js"></script>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
@include('user.layouts.header')

@yield('content')

@include('user.layouts.footer')
</body>
</html>
