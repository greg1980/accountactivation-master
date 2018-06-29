@extends('layouts.app')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label"><i class="fa fa-user fa-2x" aria-hidden="true"></i></label>

            <div class="col-md-6">
                <input id="name" type="text" placeholder="Name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></label>

            <div class="col-md-6">
                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label"><i class="fa fa-key fa-2x" aria-hidden="true"></i></label>

            <div class="col-md-6">
                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label"><i class="fa fa-key fa-2x" aria-hidden="true"></i></label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-success">
                    Register
                </button>
            </div>
        </div>
    </form>

@endsection
