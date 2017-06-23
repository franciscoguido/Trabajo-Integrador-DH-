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
	<title>Home Principal</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="grafica/icono.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

<?php if ($auth->estaLogueado()) { ?>
		Estas en mi siito <?= $usuarioLogueado->getUsername() ?>
		<div>
			<img src="<?=$imagenPerfil?>"/>	  
		</div>
		<a href="logout.php">Log Out</a>

<?php } else { ?>

<div class="container">

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

	<section class="banner">
			<img src="./grafica/ropa 1.jpg" alt="banner" style="height: 70vh">

			<div class="textobanner">
				<h1>SUSCRIBITE</h1>
				<h2>A UN PLAN SOLIDARIO</h2>
				<a>Y APOYA LA CAUSA QUE QUIERAS</a>

				<br>
				<br>

				<div class="w3-bar">
		  		<button class="w3-bar-item w3-button w3-black" style="width:100%">Donar</button>
		  		</div>
			</div>
	</section>

	<footer class="main-footer">
		<ul>
			<li><a href="faqslanding.html">Preguntas Frecuentes</a></li>
			<li><a href="#">Terminos y Condiciones</a></li>
			<li><a href="#">Contacto</a></li>
		</ul>
	</footer>


	</div>
<?php } ?>
</body>
</html>