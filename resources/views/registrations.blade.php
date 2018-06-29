@extends('layouts.app')

@section('content')

                      	<ul>
                      	@foreach ($errors->all() as $error)
                      		<li>{{ $error }}</li>
                            @if (count($errors) > 0 )
		                      <div class="alert alert-danger">
		                      	<strong>Whoops!</strong> There were some erros with your input <br>
		                      	
		                      	</ul>
		                      </div>
                    	
                             @endif
	                    @endforeach

<div class="col-md-12 col-md-offset-1">
<header id="header" class="success">
	<h1>complete your profile!</h1>
	
</header><!-- /header -->



		<div class="panel-heading">
			<h3 class="panel-title">All fields are mandatory!</h3>
		</div>

	
			<form role="form" method="post" action="/registrations">
				{{ csrf_field() }}
				<input type="hidden" name="token" value="">

				<div class="form-group">
					<label class" col-md-9 control-label" for="fname" ></label>
					<div class="col-md-9" >
						<input id="fname" placeholder="Full Name" type="text" name="fname" class="form-control" value="{{old('fname')}}" />
					</div>
				</div><br/>

				<div class="form-group">
					<label class" col-md-9 control-label" for="year_of_call" ></label>
					<div class="col-md-9" >
						<input id="year_of_call" placeholder="Year of Call" type="date" name="year_of_call" class="form-control" value="{{old('year_of_call')}}" />
					</div>
				</div><br/>


				<div class="form-group">
					<label class" col-md-9 control-label" for="address" ></label>
					<div class="col-md-9" >
						<input placeholder="Address" id="address" type="address" name="address" class="form-control" value="{{old('address')}}" />
					</div>
				</div><br/>

				<div class="form-group">
					<label class" col-md-9 control-label" for="lname" ></label>
					<div class="col-md-9" >
						<input id="lname" placeholder="Previous Names" type="text" name="lname" class="form-control" value="{{old('lname')}}" />
					</div>
				</div><br/>

				<div class="form-group">
					<label class" col-md-9 control-label" for="branch" ></label>
					<div class="col-md-9" >
						<input id="branch" placeholder="NBA Branch" type="text" name="branch" class="form-control" value="{{old('branch')}}" />
					</div>
				</div><br/>


				<div class="form-group">
					<label class" col-md-9 control-label" for="company" ></label>
					<div class="col-md-9" >
						<input id="company" placeholder="Company" type="text" name="company" class="form-control" value="{{old('company')}}" />
					</div>
				</div><br/>

				<div class="form-group">
					<label class" col-md-9 control-label" for="position" ></label>
					<div class="col-md-9" >
						<input id="position" placeholder="Position" type="text" name="position" class="form-control" value="{{old('position')}}" />
					</div>
				</div><br/>

				<div class="form-group">
					<label class" col-md-9 control-label" for="committee" ></label>
					<div class="col-md-9" >
						<select id="committee" placeholder="Join a Committee" name="committee"  value="{{old('committee')}}" />
							<option value="default">---Join a Committee---</option>
					        <option>Law Firm Management</option>
					        <option>International Legal Practice</option>
					        <option>Professional Ethics</option>
					        <option>Law and Individual Rights</option>
					        <option>Criminal Litigation</option>
					        <option>Judges' Forum</option>
					        <option>Succession Trust & Estate Planning</option>
							<option value="">Law and Individual Rights</option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							
						</select>
					</div>
				</div><br/>

				<div class="form-group">
					<label class" col-md-9 control-label" for="addCommittee" ></label>
					<div class="col-md-9" >
						<select id="addCommittee" placeholder="Add Committee" name="addCommittee"  value="{{old('addCommittee')}}" />
							<option value="default">---Add a committee----</option>
					        <option>Law Firm Management</option>
					        <option>International Legal Practice</option>
					        <option>Professional Ethics</option>
					        <option>Law and Individual Rights</option>
					        <option>Criminal Litigation</option>
					        <option>Judges' Forum</option>
					        <option>Succession Trust & Estate Planning</option>
							<option value="">Law and Individual Rights</option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							
						</select>
					</div>
				</div><br/>

				<div class="form">
					<div class="col-md-6 col-md-offset-1">
						<button type="submit" class="btn btn-success btn-block" value="Submit">Submit</button>
					</div>
				</div>

				
			</form>
		</div>

@endsection
