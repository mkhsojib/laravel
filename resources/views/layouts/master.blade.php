<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-theme.min.css') }}">

    @yield('projectcss')


    <title>Blog</title>


</head>
<body>
<div class="container">
    @yield('content')
</div>

<script type="javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

<script type="javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
@yield('projectjs')




</body>
</html>