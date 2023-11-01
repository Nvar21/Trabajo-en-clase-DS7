<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="public\css\styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="contenido-centrado">
        <div class="contenedor-login">
            <form id="form-registro" action="php/procesar_registro.php" method="POST">
                <!-- ... Formulario de Registro de usuario ... -->
                <div class="encabezado">                
                    <h2 id="titulo-contenedor">Registrar Usuario</h2>
                    <img id="logo-login" src="images\login.png" alt="">
                </div>
                <div id="cont-nombre" class="cont-form">
                    <label for="nombre_reg">Nombre:</label>
                    <input type="text" id="nombre_reg" name="nombre_reg" required>
                </div>
                <div id="cont-apellido" class="cont-form">
                    <label for="apellido_reg">Apellido:</label>
                    <input type="text" id="apellido_reg" name="apellido_reg" required>
                </div>
                <div class="cont-form">
                    <label for="email_reg">Email:</label>
                    <input type="text" id="email_reg" name="email_reg" required>
                </div>
                <div class="cont-form">
                    <label for="password_reg">Contraseña:</label>
                    <input type="password" id="password_reg" name="password_reg" required>
                </div>
                <button class="button-log" type="submit" id="RegistrarSesionBTN">Registrar</button>
                <h6>Si ya tiene una cuenta, haga click <a  href="?op=login">aquí</a></h6>

            </form>
        </div>
    </div>
    

</body>
</html>



