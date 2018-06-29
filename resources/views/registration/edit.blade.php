@extends('layouts.app')

@section('content')

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
<div class="col-md-10 col-md-offset-1">
			<header id="header" class="success">
				<h1>Edit your profile!</h1>
				
			</header><!-- /header -->
             <br>


			
				
 {!! Form::model ($registration, ['method'=>'PUT', 'action'=> ['RegistrationsController@update',$registration->id],]) !!}

	               <div class="form-group">	
	                 {!! Form::Label('fname', 'First Name:') !!}
	                 {!! Form::text('fname', null, ['class'=>'form-control'])!!}
	               </div>
	               <div class="form-group">	
	                 {!! Form::Label('lname', 'Previous Name:') !!}
	                 {!! Form::text('lname', null, ['class'=>'form-control'])!!}
	               </div>
                   <div class="form-group">	
	                 {!! Form::Label('year_of_call', 'Year Of Call:') !!}
	                 {!! Form::text('year_of_call', null, ['class'=>'form-control'])!!}
	               </div>
	               <div class="form-group">	
	                 {!! Form::Label('branch', 'NBA Branch:') !!}
	                 {!! Form::text('branch', null, ['class'=>'form-control'])!!}
	               </div>
	               <div class="form-group">	
	                 {!! Form::Label('company', 'Company:') !!}
	                 {!! Form::text('company', null, ['class'=>'form-control'])!!}
	               </div>

	               <div class="form-group">	
	                 {!! Form::Label('position', 'Position:') !!}
	                 {!! Form::text('position', null, ['class'=>'form-control'])!!}
	               </div>
	               <div class="form-group">	
	                 {!! Form::Label('address', 'Address:') !!}
	                 {!! Form::text('address', null, ['class'=>'form-control'])!!}
	               </div>
	               <div class="form-group">	
	                 {!! Form::Label('committee', 'Committee:') !!}
	                 {!! Form::text('committee', null, ['class'=>'form-control'])!!}
	               </div>
	               <div class="form-group">	
	                 {!! Form::Label('addCommittee', 'Additional Committee:') !!}
	                 {!! Form::text('addCommittee', null, ['class'=>'form-control'])!!}
	               </div>

	                <div class="form-group">
	                 {!! Form::Submit('Update Profile', ['class'=>'btn btn-success']) !!}
	               </div>


	               {!! Form::close() !!}

@endsection
