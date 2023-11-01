<?php
require_once 'basedatos.php';

class Users {
    private $pdo;
	private $msg;
    
    public $nombre;
    public $apellido;  
    public $email;
    public $pass;
}
?>