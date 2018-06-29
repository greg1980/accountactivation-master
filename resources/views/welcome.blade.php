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
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                
               <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                     </button>
                     <a class="bar-brand" href="{{ url('/') }}""><img src="image\8th SLP conference Jobs (2).jpg" alt="" /></a>
              </div>



  <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                   
                    <ul class="nav navbar-nav">
                        <li ><a href="{{ url('/Aboutus') }}">About Us</a></li>
                        <li><a href="{{ url('/Council') }}">Council Members</a></li>
                        <li><a href="{{ url('/Committees') }}">Committees</a></li>
                        <li><a href="{{ url('/Events') }}">Events</a></li>
                        <li><a href="{{ url('/Membership') }}">Membership</a></li>
                        <li><a href="{{ url('/Contact') }}">Contact Us</a></li>
                    </ul>


                         @if (Route::has('login'))
                                
                                    <ul class="nav navbar-nav navbar-right">
                                    @if (Auth::check())
                                      <li><a href="{{ url('/home') }}">Home</a> </li>
                                    @else
                                          <li> <a href="{{ url('/login') }}">Login</a></li>
                                          <li> <a href="{{ url('/register') }}">Register</a></li>
                                    @endif
                                   </ul>
                                
                            @endif
                           
                </div>
            </nav>


    </head>
    <body>
            
           

            <div class="content">
                

                             <div id="carousel-id" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
             <li data-target="#carousel-id" data-slide-to="0" class=""></li>
             <li data-target="#carousel-id" data-slide-to="1" class=""></li>
             <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
              <li data-target="#carousel-id" data-slide-to="3" class=""></li>
           </ol>
           <div class="carousel-inner">

             <div class="item active">
               <img src="image\nba-slp1.jpg" alt="" />
               <div class="container">
                 <div class="carousel-caption">
                   <h1 >Section On Legal Practice.</h1>
                   <p>Promoting the exchange of information and views among individual members of the Section.</p>
                   <p><a class="btn  btn-success" href="#" role="button">Sign up today</a></p>
                 </div>
               </div>
             </div>

             <div class="item">
               <img src="image\nba-slp2.jpg" alt="" />
                <div class="container">
                 <div class="carousel-caption">
                   <h1>Section On Legal Practice.</h1>
                   <p>Assisting members to develop and improve their legal services to the public.</p>
                   <p><a class="btn btn-success" href="#" role="button">Learn more</a></p>
                 </div>
               </div>
             </div>

             <div class="item ">
              <img src="image\nba-slp3.jpg" alt="" />
              <div class="container">
                 <div class="carousel-caption">
                   <h1>Section On Legal Practice.</h1>
                   <p>To promote and provide Continuing Legal Education.</p>
                   <p><a class="btn btn-success" href="#" role="button">Browse gallery</a></p>
                 </div>
               </div>
             </div>

        </div>
           <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
           <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
         </div>


    </div> <!-- end of content -->

        
     <div class="container">
          <div class="col-lg-9 col-md-6 col-sm-12">
            <h1>Welcome To Section On Legal Practice</h1>
            <div class="media">
               <div class="media-left">
                 <a href="#">
                   <img class="media-object" src="image\pres.jpg" alt="...">
                 </a>
               </div>

                 <div class="media-body">
                   <h4 class="media-heading">About SLP</h4>
                   <p class="row">
         The Nigerian Bar Association Section on Legal Practice (NBA-SLP) was inaugurated on the 9th of December 2004 by
          the then President of the NBA, Chief Bayo Ojo, SAN. The Section was created alongside the <a href="www.nba-sbl.org"> Section on Business Law</a> following the approval
          of the National Executive Committee (NEC) pursuant to the resolution of the Annual General Conference held in Enugu in 2003.

       The Section On Legal Practice (SLP) has <a href="www.nba-slp/committees.php">14 committees</a>  , established to cover existing and new areas of interest, with a view
       to encouraging specialised legal practice for all Nigerian lawyers and law firms.

       The Section has 10 (Ten) Council Members drawn from diverse legal backgrounds.<br/><br>
               <a href="about_us.php"> <button type="button" class="btn btn-xs btn-success">Read More</button></a>
                 </p>
               </div>
         </div><br /><br />

         <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <img src="image\comt.jpg" alt="...">
                <div class="caption">
                  <h4><i class="fa fa-user-plus" aria-hidden="true"></i>
                    Section Committees
                  </h4>
                  <p>The Section is modeled principally along the lines of the International Bar Association
                   . All member of the NBA is expected to belong to at least one committee.</p>
                  <p><a href="committees.php" class="btn btn-xs btn-success" role="button">More </a></p>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <img src="image\membership.jpg" alt="...">
                <div class="caption">
                  <h4><i class="fa fa-users" aria-hidden="true"></i>
                    Membership
                  </h4>
                  <p>Membership is open to any member of the Nigerian Bar Association upon satisfactory completion
                    of the Registration Form and the payment of the Section dues.</p>
                  <p><a href="registration.php" class="btn btn-xs btn-success" role="button">More </a></p>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <img src="image\council.jpg" alt="...">
                <div class="caption">
                  <h4><i class="fa fa-user-times" aria-hidden="true"></i>
                     Council Members
                  </h4>
                  <p>The members of the Nigerian Bar Association Section on Legal Practice are drawn from diverse
                    backgrounds and bring their wealth of experience.</p>
                  <p><a href="council_members.php" class="btn btn-xs btn-success" role="button">More </a></p>
                </div>
              </div>
            </div>
          </div>




          </div><br/>


                <div class="col-lg-3 col-md-3">
                  <a href="#" class="thumbnail">
                    <img src="image\conference.jpg" alt="...">
                  </a>
                </div>



          <div class="col-lg-3">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                   <span class="label label-success  " ><i class="fa fa-gavel" aria-hidden="true"></i>
                    LATEST NEWS </span>
                </a>

                                

              
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
  </script>
    </body>

</html>