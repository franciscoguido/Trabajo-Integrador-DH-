<!DOCTYPE html>
<html>
<head>
	<title>Ingresar</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="estiloregistro.css">
	<link rel="icon" type="image/png" href=" grafica/icono.png">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
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

	<section class="ingresar" >
			<div id="divingreso">
			<form class="formulario-ingreso" action="  " method="post">
			
						<h2 id="inicia">Inicia sesión </h2>

						<label  class="labelingreso" for="correo-electronico"> Correo electrónico </label> <input class="inputingreso" type="email" required name="Correo electronico" placeholder="mail@ejemplo.com"> <br>
												
						<label class="labelingreso" for="password"> Contraseña </label> <input class="inputingreso" type="password" label for="password" required name="Password" placeholder="******"> <br>
					
						<button  type="submit" id="boton-ingreso" > Ingresa </button>
					
						<p id="p-ingreso" > Todavia no te regristraste? <a href="registro.html">Hacelo acá</a> </p>
			
			</form>
			</div>
	</section>

	<?php  
	include "footer.php";

	?>


</div>
</body>
</html>

