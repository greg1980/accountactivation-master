<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'NBA-SLP') }}</title>

        <!-- Bootstrap CSS -->

         <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css" media="screen" title="no title" charset="utf-8">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">Home</a>
                    <ul class="nav navbar-nav">
                        <li >
                            <a href="{{ url('Aboutus') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ url('Council') }}">Council Members</a>
                        </li>
                        <li>
                            <a href="{{ url('Committees') }}">Committees</a>
                        </li>
                        <li>
                            <a href="{{ url('Events') }}">Events</a>
                        </li>
                        <li>
                            <a href="{{ url('Membership') }}">Membership</a>
                        </li>
                        <li>
                            <a href="{{ url('Contact') }}">Contact Us</a>
                        </li>
                    </ul>
                         @if (Route::has('login'))
                                
                                    <ul class="nav navbar-nav navbar-right">
                                    @if (Auth::check())
                                      <li><a href="{{ url('/home') }}">Profile</a> </li>
                                    @else
                                          <li> <a href="{{ url('/login') }}">Login</a></li>
                                          <li> <a href="{{ url('/register') }}">Register</a></li>
                                    @endif
                                   </ul>
                                
                            @endif
                           
                </div>
            </nav>


           
           <div class="container">
  <div class="col-lg-9 col-md-6 col-sm-3">
    <div class="page-header">
      <img class="img-responsive"src="/image/ire.jpg" alt="">
    </div>
    <ol class="breadcrumb">
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>
        <a href="events.php">Events</a>
      </li>
      <li>
        <a href="registration.php">Register</a>
      </li>
    </ol>

        @yield('content')

  </div>
  <br /><br/>
  <div class="col-lg-3 col-md-3">
    <a href="#" class="thumbnail">
      <img src="\image\conference.jpg" alt="...">
    </a>
  </div>
  <div class="col-lg-3">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        <span class="label label-success"><i class="fa fa-gavel" aria-hidden="true"></i>
        LATEST NEWS </span>
      </a>
      <a href="#" class="list-group-item">Steering Committees for SlP,Spidel & Womens Forum</a>
      <a href="#" class="list-group-item">Dispute Resolution Committee</a>
      <a href="#" class="list-group-item">NBA 2016 Election Result</a>
      <a href="#" class="list-group-item">Report Of The Electoral Committee On Aspirants for 2016 NBA Elections </a>
      <a href="#" class="list-group-item">Notification By Tht Interim Steering Committee For (SPIDEL) </a>
    </div>
  </div>
</div>


            

                

            </div>
        
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
       <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src="js/main.js"></script>
<script type="text/javascript">
$('#myCarousel').on('slide.bs.carousel', function () {
// do something…
});

$(document).ready(function () {
 $('.office-title').next('div').slideToggle();
 $('.office-title').click(function(){
 $('.office-title').next('div').slideUp();
     $(this).next('div').slideToggle();
     return false;
});
     });
  </script>
    </body>
</html>