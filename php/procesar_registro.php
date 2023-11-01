<?php
$host = "localhost";
$dbname = "trabajo_en_clase_ds7";
$user = "estudiante";
$pass = "utp2023";


// Conexión a la base de datos
$conexion = mysqli_connect($host, $user, $pass, $dbname);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Establecer la codificación a utf-8
mysqli_set_charset($conexion, "utf8");

// Recibir y validar datos
if (isset($_POST['nombre_reg']) && isset($_POST['apellido_reg']) 
   &&isset($_POST['email_reg'])&&isset($_POST['password_reg'])){
    $nombre = $_POST['nombre_reg'];
    $apellido = $_POST['apellido_reg'];
    $email = $_POST['email_reg'];
    $hashPass = $_POST['password_reg'];
    $hash = password_hash($hashPass, PASSWORD_DEFAULT);

    #INSERTAR DATOS EN BASE DE DATOS / TABLA USUARIOS
    $sql = "INSERT INTO `usuario`(`nombre`, `apellido`, `email`, `pass`) 
    VALUES ('$nombre','$apellido','$email','$hash')";
    
    
    if (mysqli_query($conexion, $sql)) {
        echo "Registro realizado exitosamente";
        // Espera unos segundos antes de redirigir
        exit();
        header("refresh:1;url=/ver perfil");

    } else {
        echo "Error al guardar el registro: " . mysqli_error($conexion);
    }

}

// Cerrar la conexión
mysqli_close($conexion);
?>
