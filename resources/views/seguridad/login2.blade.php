<!doctype html>
<html>
<head>
	<title>Look at me Login</title>
</head>
<body>

	{{ Form::open(array('url' => 'login', 'method' => 'POST')) }}
    <h1>Login</h1>

		@if (Session::get('loginError'))
		<div class="alert alert-danger">{{ Session::get('loginError') }}</div>
		@endif

		<p>
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>

		<p>{{ Form::submit('Submit!') }}</p>

	{{ Form::close() }}

	<a class="btn btn-block btn-social btn-google" href="{{ route('handleSocialLite', ['provider' => 'google']) }}">
	    <i class="fa fa-google-plus"></i> Iniciar sesión con Google
	</a>
</body>
</html>