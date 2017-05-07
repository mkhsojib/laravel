<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--jquery cdn--}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    {{--bootstrap start--}}
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    {{--<!-- Optional theme -->--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"--}}
    {{--integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">--}}

<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>


    {{--bootstrap end--}}
    <title>@yield('title')</title>


</head>
<body>
<div class="container">


    <div class="loginBox nav navbar-nav pull-right">


        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif

    </div>


    <div>


        <h1> Welcome to our blog</h1>
    </div>

    {{--nav bar start--}}
    <nav class="navbar navbar-default">

        <div class="container-fluid">

            <ul class="nav navbar-nav">

                <li class="dropdown">

                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Sort Posts By <span class="caret">

                        </span></a>
                    <ul class="dropdown-menu">

                        <li><a href="">Top 10 Most Recent Post</a></li>
                        <li><a href="">Top 10 Likded Posts</a></li>
                        <li><a href="">Top 10 Most Commented Posts</a></li>
                        <li><a href="">Top 10 Most Visited Posts</a></li>

                    </ul>
                </li>


            </ul>

            @if(Auth::check())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('posts.index') }}">Manage Blog Posts</a></li>
                </ul>
            @endif


        </div>


    </nav>


    {{--nav bar end--}}


    <div>

        <h2> Top 10 Most Recent Blogs</h2>

        @yield('content')
        <div class="footer text-center" style="margin:20px 0 60px 0;">


            <p> &copy; mkhsojib.com | Developed by: Coder Hand</p>
        </div>

    </div>
</div>

</body>
</html>