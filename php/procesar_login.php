<?php
$host = "localhost";
$dbname = "trabajo_en_clase_ds7";
$user = "estudiante";
$pass = "utp2023";

// Conexión a la base de datos
$conexion = mysqli_connect($host, $user, $pass, $dbname);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Establecer la codificación a utf-8
mysqli_set_charset($conexion, "utf8");

if (isset($_POST['email_log']) && isset($_POST['password_log'])) {
    $email = $_POST['email_log'];
    $password = $_POST['password_log'];

    // Consulta preparada para obtener las credenciales del usuario
    $sql = "SELECT email, pass FROM `usuario` WHERE email = ?";

    // Crear una consulta preparada
    $stmt = mysqli_prepare($conexion, $sql);

    // Vincular el valor al marcador de posición
    mysqli_stmt_bind_param($stmt, "s", $email);

    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);

    // Obtener el resultado de la consulta
    $result = mysqli_stmt_get_result($stmt);

    // Obtener las credenciales del usuario
    $credenciales = mysqli_fetch_assoc($result);

    // Cerrar la consulta preparada
    mysqli_stmt_close($stmt);

    // verifica si las credenciales son correctas usando password_verify
    if ($credenciales && password_verify($password, $credenciales['pass'])) {
        // Iniciar la sesión
        session_start();
        // Variables de sesión:
        $_SESSION['sesionIniciada'] = true;
        $_SESSION['nombre'] = $credenciales['email'];
        header("refresh:2;url=?op=ver perfil");
    } else {
        header("refresh:4;url=/views/login.php");
    }

    mysqli_close($conexion);
}
?>
