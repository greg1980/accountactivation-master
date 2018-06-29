@extends('layouts.app')

@section('content')


                    @if(Session::has('flash_message')) 
                      <div class="alert alert-success">	
                         {{Session::get('flash_message') }}
                      </div>
                    @endif


                     @if (count($errors) > 0 )
                      <div class="alert alert-danger">
                      	<strong>Whoops!</strong> There were some erros with your input <br>
                      	<ul>
                      		@foreach ($errors->all() as $error)
                      		<li>{{ $error }}</li>
                      		@endforeach
                      	</ul>
                      </div>

            
                    	
                    @endif

    <div style="width:700px; font-style: normal; font-size:14px; margin-left: 20px;">
    <header id="header" style="margin-bottom: 20px;">
      <img src="../image/ire.jpg" style="width:700px;">
    </header><!-- /header --><br/>
    
    <p>Dear {{ Auth::user()->name }} </p><br/>
    <p style="color: green">Thank you for registring with the NBA Section On Legal Practice</p>
    <p>
As the Chairman of the Section On Legal Practice, I wanted to reach out to you and welcome you to the Section. You're joining a Legal community of over 300,000 lawyers, and we're really excited to have you here.</p>

        <p>Now that you're a part of our community, you can expect:</p>
          <ul>            
            <li>Join membership to any of the Section’s Committee of your choice</li>
            <li> And also note that you can join as many Committees as you can be committed to.</li>
          </ul>
         <p>These are subject upon satisfactory completion of your profile and payment of the Section dues</p>

        <p>The Section is currently made up of Fourteen Committees that promote the participation of members of the Association towards achieving the objectives of the Section.</p>

    <p>Our Membership base is growing each and every day, but our goal has always remained the same regardless of our size; we want to have a personal connection with each and every member. If you have any questions regarding your Membership, or even just want to chat, we're here to help.</p>

    <p>our web site is <a href="www.nba-slp.org">Nba-slp.org</a> </p><br/>
    <p>Well, I think that's it! So, on behalf of the entire Section On Legal Practice team: welcome!</p><br>


         <p>Mrs Mia Essien SAN</p>
         <p><b>SECTION CHAIRMAN</b></p><br>

    
  </div>
  <footer style="background-color: green; height:30px; color:white;">
      <p style="margin-left: 5px;">NBA House, No. 24, Oro-Ago Crescent.<em> Off Muhammadu Buhari way,Garki Area II, Abuja F.C.T. Nigeria</em></p>
    </footer>
         


@endsection
