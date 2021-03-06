@extends('layouts.admin')

@section('content')


         <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow title">
                <h2>NBA-SLP Paid Users</h2>
                    <table class="table table-hover">
					    <thead>
					      <tr>
					        <th>Id</th>
					        <th>Image</th>
					         <th>Firstname</th>
					         <th>Lastname</th>
					         <th>Role</th>
					         <th>Active</th>
					         <th>Date Paid</th>
					        <th>Depositors</th>
					      </tr>
					    </thead>
					    <tbody>

					      @if($users)




					      @foreach($users as $user)
					      <tr>
					        <td>{{$user->id}}</td>
					        <td><img  height="30" src="\uploads\avatar\{{ $user->avatar}}" class="uploadsimg"/></td>
					        <td>{{ $user->registration->fname}}</td>
					        <td><a href="{{url('admin/edit', $user->id)}}">{{$user->name}}</a></td>
					        <td>{{$user->email}}</td>
					        <td>{{$user->role->name}}</td>
					        <td>{{$user->is_active = 1 ? 'Active' : 'Not Active'}}</td>
					        <td>{{$user->created_at->diffForHumans()}}</td>
					        <td>{{$user->updated_at->diffForHumans()}}</td>
					      </tr>
					     

					     @endforeach
					     @endif
					    </tbody>
					  </table>
              </div>
            </div>
          </section>
               


@endsection