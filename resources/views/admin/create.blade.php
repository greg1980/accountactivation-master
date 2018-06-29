@extends('layouts.admin')

@section('content')

  <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">

                    @if (count($errors) > 0 )
                      <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some errors with your input <br>
                        <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                      
                    @endif
              <div class="row bg-white has-shadow title">
                <h2>Create Users</h2>
                 <br/>
                   




	               {!! Form::open (['medthod'=>'POST', 'action'=>'AdminController@store', 'files'=>true]) !!}

	               <div class="form-group">	
                      
	                 {!! Form::Label('email', 'Email:') !!}
	                 {!! Form::text('email', null, ['class'=>'form-control'])!!}
	               </div>

	               <div class="form-group">	
                     
	                 {!! Form::Label('name', 'Name:') !!}
	                 {!! Form::text('name', null, ['class'=>'form-control'])!!}
	               </div>

	               <div class="form-group">	
                      
	                 {!! Form::Label('Password', 'Password:') !!}
	                 {!! Form::password('password',  ['class'=>'form-control'])!!}
	               </div>
                  
                 <div class="form-group">
                    {!! Form::Label('file','Receipt') !!}
                    {!! Form::File('file', null, ['class' =>'form-control']) !!}

                 </div>

	                <div class="form-group">    
                      
                     {!! Form::Label('role_id', 'Role:') !!}
                     {!! Form::select('role_id', ['' =>'choose option'] + $roles, null, ['class'=>'form-control'])!!}
                   </div>
	               
                    <div class="form-group">	
                    
	                 {!! Form::Label('active', 'Status:') !!}

	                 {!! Form::select('active', array( 1 =>'active', 0 =>'Not Active'), 0, ['class'=>'form-control'])!!}
	               </div>

	                <div class="form-group">	

	               
	                 {!! Form::Submit('Create User', ['class'=>'btn btn-success']) !!}
	               </div>

	               {!! Form::close() !!}




            </div>
        </div>
  </section>

@endsection