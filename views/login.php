<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="public/css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="contenido-centrado">
        <div class="contenedor-login">
            <form  id="form-login" action="php/procesar_login.php" method="POST">
            <!--------------------------------------------------------------------------->
                <!-- ... Formulario de Login -->
                <div class="encabezado">                
                    <h2 id="titulo-contenedor">Iniciar Sesión</h2>
                    <img id="logo-login" src="images\login.png" alt="">
                </div>

                <div class="cont-form">
                    <label for="email_log">Email:</label>
                    <input type="text" id="email_log" name="email_log" required>
                </div>
                <div class="cont-form">
                    <label for="password_log">Contraseña:</label>
                    <input type="password" id="password_log" name="password_log" required>
                    <a id="cambiarPass" href="####">Cambiar mi contraseña</a>
                </div>
                <button class="button-log" type="submit" id="IniciarSesionBTN">Iniciar Sesión</button>
                
                <h6>Si aún no tiene una cuenta, registrese <a id="registrarUser" href="?op=registrar">aquí</a></h6>
            </form>
        </div>
    </div>
    

</body>
</html>
<?php

if (isset($_SESSION["usuario"])) {
    // El usuario ya ha iniciado sesión, redirigir a la página protegida
    header("Location: pagina_protegida.php");
    exit();
}
?>

