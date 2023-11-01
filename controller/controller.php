<?php
session_start();
class Controller
{

    public function index(){
        //Le paso los datos a la vista
        require("views/login.php");
    }
    public function registrarUsuario(){
        require("views/registrar.php");
    }

    public function VerPerfilUsuario(){
        require("views/perfil.php");
    }

    public function iniciarSesionUsuario(){
        require("views/login.php");
    }
}
