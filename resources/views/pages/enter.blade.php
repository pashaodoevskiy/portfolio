@extends('template.global')

<title>@yield('title', 'login/registration')</title>

@section('styles')
	<link rel="stylesheet" type="text/css" href="/public/css/pages/enter.css">
@endsection

@section('scripts')
	<script src="/public/js/pages/enter.js"></script>
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row content">
			<div class="col d-flex justify-content-center align-items-center">
				<div class="flex-column">
					<div id="login" class="foursquare-label d-flex justify-content-center align-items-center">login</div>
					<div id="foursquare-login" class="foursquare-login">
						<form class="form-horizontal" method="POST" action="{{ route('login') }}">
						    {{ csrf_field() }}

						    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

						        <div class="col-md-12">
						            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

						            @if ($errors->has('email'))
						                <span class="help-block">
						                    <strong>{{ $errors->first('email') }}</strong>
						                </span>
						            @endif
						        </div>
						    </div>

						    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

						        <div class="col-md-12">
						            <input id="password" type="password" class="form-control" name="password" required>

						            @if ($errors->has('password'))
						                <span class="help-block">
						                    <strong>{{ $errors->first('password') }}</strong>
						                </span>
						            @endif
						        </div>
						    </div>
						    <div class="form-group">
						    	<div class="checkbox col-12">
						    	    <label>
						    	        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
						    	    </label>
						    	</div>
						        <div class="col-md-12">
						            <button type="submit" class="btn btn-primary col-12">
						                Login
						            </button>
						            <a class="btn btn-link p-0" href="{{ route('password.request') }}">
						                Forgot Your Password?
						            </a>
						        </div>
						    </div>

						    <div class="form-group">

						    </div>
						</form>
					</div>
				</div>
			</div>
			<div class="col d-flex justify-content-center align-items-center">
				<div class="flex-column">
					<div id="registration" class="foursquare-label d-flex justify-content-center align-items-center">registration</div>
					<div id="foursquare-registration" class="foursquare-registration">
						<form class="form-horizontal" method="POST" action="{{ route('register') }}">
						    {{ csrf_field() }}

						    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						        <div class="col-md-12">
						            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

						            @if ($errors->has('name'))
						                <span class="help-block">
						                    <strong>{{ $errors->first('name') }}</strong>
						                </span>
						            @endif
						        </div>
						    </div>

						    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						        <div class="col-md-12">
						            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

						            @if ($errors->has('email'))
						                <span class="help-block">
						                    <strong>{{ $errors->first('email') }}</strong>
						                </span>
						            @endif
						        </div>
						    </div>

						    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<div class="col-md-12">
						            <input id="password" type="password" class="form-control" name="password" required>

						            @if ($errors->has('password'))
						                <span class="help-block">
						                    <strong>{{ $errors->first('password') }}</strong>
						                </span>
						            @endif
						        </div>
						    </div>

						    <div class="form-group">
						        <div class="col-md-12">
						            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
						        </div>
						    </div>

						    <div class="form-group">
						        <div class="col-md-6 col-md-offset-4">
						            <button type="submit" class="btn btn-primary">
						                Register
						            </button>
						        </div>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection