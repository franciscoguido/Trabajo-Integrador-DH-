<?php
    require_once("soporte.php");
    require_once("validadorUsuario.php");

    $repoUsuarios = $repo->getRepositorioUsuarios();

    if ($auth->estaLogueado()) {
        header("Location:inicio.php");exit; //////ver
    }
    $errores = [];
    $nombreDefault = "";
    $emailDefault = "";

    
    if (!empty($_POST))
    {
        $validador = new ValidadorUsuario();
        //Se envió información
        $errores = $validador->validar($_POST, $repo);

        if (empty($errores))
        {
            //No hay Errores

            //Primero: Lo registro
            $usuario = new Usuario(
                null,
                $_POST["name"],
                $_POST["email"],
                $_POST["username"],
                $_POST["password"]
            );
            $usuario->setPassword($_POST["password"]);
            $usuario->guardar($repoUsuarios);
            $usuario->setAvatar($_FILES["avatar"]);

            //Segundo: Lo envio al exito
            header("Location:exito2.php");exit;


        }

        if (!isset($errores["name"]))
        {
            $nombreDefault = $_POST["name"];
        }
        if (!isset($errores["email"]))
        {
            $emailDefault = $_POST["email"];
        }
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
    <form class="formulario-ingreso" method="POST" action="register.php" enctype="multipart/form-data">

        <h2 id="inicia"> Registrate </h2>

        <div>
            <font color="white">Nombre:
            <input class="inputingreso" type="text" name="name" value="<?=$nombreDefault?>">
        </div>
        <div>
            Username:
            <input class="inputingreso" type="text" name="username" >
        </div>
        <div>
            Mail:
            <input class="inputingreso" type="text" name="email" >
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
    </footer>s
</body>
</html>