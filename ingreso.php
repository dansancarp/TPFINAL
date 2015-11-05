<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Estacionamiento</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->		
		<script src="js/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<script src="js/funcionesLogin.js"></script>

		<!--Final de Lógica-Programación -->
		

	</head>
	<body>		
		<div class="principal animated bounceInRight">

			<div id="cabecera">
				<img src="imagenes/cabecera.jpg">
			</div>

			<div id="contenido">
				<img src="imagenes/auto.png">
				<!--Comienza formulario-->
				
					<form>						

						<input type="text" id="usuario" name="usuario" placeholder="Ingrese usuario">

						<input type="password" id="password" name="password" placeholder="Ingrese password">

						<input type="button" class="btn-primary" value="Login" onclick="login();">						

						<input type="button" class="btn-primary" value="Registrar" onclick="MostrarRegistroUsuario();">

						<input type="button" class="btn-primary" value="Cambiar Password" onclick="MostrarCambioPassword();">

						<input type="text" id="mensaje" readonly>

					</form>

				<!--Fin del formulario-->
			</div>

			<div id="pie">
				<a href="mailto:dansan0012@gmail.com"><img src="imagenes/gmail.png"></a>
				<a href="https://plus.google.com/u/1/103480492379976901548/about"><img src="imagenes/google.png"></a>
				<a href="https://github.com/dansancarp"><img src="imagenes/github.png"></a>
			</div>

		</div>
	</body>
</html>