<?php
	require("soporte.php");

	$repoUsuarios = $repo->getRepositorioUsuarios();

	$usuarioLogueado = $auth->traerUsuarioLogueado($repoUsuarios);

	if ($usuarioLogueado) {
		
		$imagenPerfil = $usuarioLogueado->getAvatar();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="estiloregistro.css">
	<link rel="icon" type="image/png" href="grafica/icono.png">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<header class="main-header">
		<a href="home.html"><img src="./grafica/Logo-prueba.png" alt="logotipo" class="logo"></a>

		<nav class="main-nav">
			<ul>

			<div class="btn-group">
				<div class="w3-bar">
	  			<button class="w3-bar-item w3-button w3-black" style="width:50%"><a href="register.php">Donar</a></button>
	  			<button class="w3-bar-item w3-button w3-black" style="width:50%"><a href="login2.php">Ingresar</a></button>
	  			</div>
			</div>
			
			  <li><a href="contactp.html" >Contacto</a></li>
			  <li><a href="beneficios.html">Beneficios</a></li>
			  <li><a href="causas.html">Causas</a></li>
			  <li><a href="como funciona.html">Como funciona</a></li>
			  
			</ul>
		</nav>
		
	</header>

	<section class="ingresar"> 
	<form class="formulario-ingreso" method="POST" action="registrar.php" enctype="multipart/form-data">

		<h2 id="inicia"> Registrate </h2>

		<div>
			<font color="white">Nombre:
			<input class="inputingreso" type="text" name="nombre" value="<?=$nombreDefault?>">
		</div>
		<div>
			Username:
			<input class="inputingreso" type="text" name="username" value="<?=$usernameDefault?>">
		</div>
		<div>
			Mail:
			<input class="inputingreso" type="text" name="mail" value="<?=$mailDefault?>">
		</div>
		<div>
			Contraseña:
			<input class="inputingreso" type="password" name="password">
		</div>
		<div>
			Confirmar Contraseña:
			<br><input type="password" name="cpassword">
		</div>
		<div>	
			Foto de perfil: 
			<input  class="inputingreso" type="file" name="avatar">
		</div> 
		<br>
		<div>
			<input type="submit" name="" value="Enviar">
		</div>
		</font>
	</form>
	<section class="ingresar">

	<footer class="main-footer">
		<ul>
			<li><a href="faqslanding.html">Preguntas Frecuentes</a></li>
			<li><a href="#">Terminos y Condiciones</a></li>
			<li><a href="#">Contacto</a></li>
		</ul>
	</footer>
</body>
</html>