<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NBA-SLP') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css" media="screen" title="no title" charset="utf-8">
    

    <!-- Scripts -->
    <script>
        window.NBA-SLP = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'NBA-SLP') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle profhref" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <img src="\uploads\avatar\{{ Auth::user()->avatar}}" class="profpics" />
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/profile') }}"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                                    <li><a href="{{ url('/registrations') }}"><i class="fa fa-address-card"></" aria-hidden="true"></i> Registration</a></li>
                                    <li><a href="{{ url('/teller') }}"><i class="fa fa-money"></" aria-hidden="true"></i> Payment Details</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-success">
                        <div class="panel-heading "><img src="image\8th SLP conference Jobs (2).jpg" alt=""> <strong> {{ucfirst(Request::segment(1))}}</strong></div>

                        <div class="panel-body">

                             @include('includes.alerts')

                             @yield('content')

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body> <br> <br> <br>

           <div class="footer"><!-- footer -->
    <div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4">
            <h1>NBA-SLP:</h1>
            <p>NBA House,
            No. 24, Oro-Ago Crescent.</p> <p><em>Off Muhammadu Buhari way,Garki Area II,
        Abuja F.C.T. Nigeria</em></p>
    </div>
    <div class="col-lg-3 col-md-4">
        <h1>Get intouch:</h1>
        <p><i class="fa fa-mobile"></i> 08170045831</p>
        <p><i class="fa fa-envelope"></i>  Contact us on <a href="emegwalio@yahoo.com">info@nba-slp.org</a></p>
    </div>
    <div class="col-lg-3 col-md-4">
        <h1>Other Links:</h1>
        <p>
            Disclaimer
        </p>
        <p>
            IT Policy
        </p>
    </div>
    <div class="col-lg-3 col-md-4">
        <h1>Copyright:</h1>
        <p>
            Copyright (c) 2016 NBA-SLP. All Rights Reserved.
        </p>
    </div>
</div>
</div>
</div><!-- footer -->
</html>
