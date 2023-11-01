<?php


//Incluyo los archivos necesarios
require("./controller/Controller.php");



//Instancio el controlador
$controller = new Controller;

//Decido la ruta en función de los elementos del array
if (isset($_GET['op'])) { 
//verifica si se ha pasado un parámetro llamado 'op' en la URL a través de $_GET. El parámetro 'op' se utiliza para determinar qué acción se debe realizar.
// el 'op' se va a llamar dentro de los otros archivos, ejemplo, si no tiene una cuenta y está en login.php, href="?op=registrar" para llevar a registrar.php

    $opcion=$_GET['op'];

    if ($opcion=="registrar")
    {
    //Llamo al método ver pasándole la clave que me están pidiendo
    $controller->registrarUsuario();
    }
    if ($opcion=="login")
    {
    $controller->iniciarSesionUsuario();
    }
    if ($opcion=="ver perfil")
    {
    $controller->VerPerfilUsuario();
    }
}

else{
    //Llamo al método por defecto del controlador
    $controller->index();
}