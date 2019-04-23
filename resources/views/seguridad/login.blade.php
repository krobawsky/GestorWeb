<html>
	<body>
		<form action="codigo" method="post">
			{{ csrf_field() }}
			<input type="button" name="Enviar" value="Ingresar con google" />
			<p>Correo: <input type="text" name="email" /></p>
			<p>Password: <input type="password" name="pass" /></p>
			<input type="submit" name="Enviar" value="Enviar" />
		</form>
	</body>
</html>