<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=decive-width, initial-scale=1.0">
	<title>Login y Registro</title>
	<link rel="stylesheet" type="text/css" href="css/estilos1.css">
</head>
<body>
	<main>

		<div class="contenedor__todo">
			
			<div class="caja__trasera">
				<div class="caja__trasera-login">
					<h3>¿Ya tienes una cuenta?</h3>
					<p>Inicia sesion para entrar a la página</p>
					<button id="btn__iniciar-sesion">Iniciar Sesión</button>
				</div>
				<div class="caja__trasera-register">
					<h3>¿Aún no tienes una cuenta?</h3>
					<p>Registrate para que puedas Iniciar Sesión</p>
					<button id="btn__registrarse">Regístrarse</button>
				</div>
			</div>

            <!-- FORMULARIO DE LOGIN Y REGISTRO-->
			<div class="contenedor__login-register">
				<!--LOGIN-->
				<form action="" class="formulario__login">
					<img src="images/instag.gif" alt="" class="logo">
					<h2>Iniciar Sesión</h2>
					<input type="text" placeholder="Correo Electronico">
					<input type="password" placeholder="Contraseña">
					<button>Entrar</button>
					<br>
					<a href="Inicio.php">Entrar</a>
				</form>
                <!--REGISTRO-->
				<form  action="" class="formulario__register">
					<img src="images/instag.gif" alt="" class="logo">
					<h2>Regístrarse</h2>
					<input type="text" placeholder="Nombre Completo">
					<input type="text" placeholder="Correo Electronico">
					<input type="text" placeholder="Usuario">
					<input type="password" placeholder="Contraseña">
					<button>Registrarse</button>
				</form>
			</div>

		</div>

	</main>
	<a href="script.js"></a>
<script src="/xampp/htdocs/Cpweb/js/script.js"></script>
</body>
</html>