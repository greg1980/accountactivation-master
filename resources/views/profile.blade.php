@extends('layouts.app')

     @section('content')
      
                    @if(Session::has('flash_message')) 
                      <div class="alert alert-success"> 
                         {{Session::get('flash_message') }}
                      </div>
                    @endif
    <div class="container">
     	<div class="row">
     
        <div class="col-md-10 col-md-offset-1">

        	<img src="\uploads\avatar\{{ $user->avatar}}" class="uploadsimg"/>
                   <h2>{{$user->name}}'s Profile</h2> 
	           
	            <form  enctype="multipart/form-data" action="/profile" method="POST" accept-charset="utf-8">
	              	<label>
	              		<input type="file" name="avatar" >
	                    <input type="hidden" name="_token" value="{{csrf_token() }}"><br/>
	                    <input type="submit" class="pull-right btn btn-sm btn-success" value="submit">
	                </label>	

	            </form> 		
        </div> 
          <br>

          <!-- Registration Form -->


               <div class="container">
               	<div class="row">
               		<div class="col-md-12 col-md-offset-1">
               			
                     <br><h3>Registration details</h3>
                   
                   <p>Name: {{$user->name}} </p>
                   <p> FUll Name:{{ $user->registration ? $user->registration->fname : 'User has no first name'}}</p>
                   <p>Previous Name: {{ $user->registration ? $user->registration->lname : 'user has no last name'}}</p>
                   <p>Year Of Call:{{$user->registration ? $user->registration ->year_of_call : 'User has nor name' }}</p> 
                   <p> Address:{{ $user->registration ? $user->registration->address: 'User has no address'}}</p>
                   <p>Company: {{$user->registration ? $user->registration->company : 'User has no details'}}</p>
                   <p>Position: {{$user->registration ? $user->registration->position : 'User has no details'}}</p>
                   <p>Committee: {{$user->registration ? $user->registration->committee : 'User has no details'}}</p>
                   <p>Additional Committee: {{$user->registration ? $user->registration->addCommittee : 'User has no details'}}</p>
                   <p>NBA Branch: {{$user->registration ? $user->registration->branch : 'User has no details'}}</p>
                   <p></p>
                     <a href="{{route('registration.edit', $user->registration->id)}} "> <btn class="btn-sm btn-danger">Edit profile</btn>      </a>
               		</div>
               	</div>
               </div>



     	</div>           	
    </div>               
      
@endsection
