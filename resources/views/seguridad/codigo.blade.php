<html>
	<body>
		{!! Form::open(array('url' => 'codigo')) !!}
	    <h1>Codigo</h1>

			@if (Session::get('mensajeError'))
			<div class="alert alert-danger">{{ Session::get('mensajeError') }}</div>
			@endif
			<h5>Ingresar codigo enviado a su correo</h5>
			<p>
				{{ Form::label('email', 'Correo') }}
				{{ Form::text('email', Input::old('email'), array('value' => 'correo', 'disabled')) }}
			</p>

			<p>
				{{ Form::label('codigo', 'Codigo') }}
				{{ Form::text('codigo') }}
			</p>

			<p>{{ Form::submit('Verificar') }}</p>

		{!! Form::close() !!}
	</body>
</html>