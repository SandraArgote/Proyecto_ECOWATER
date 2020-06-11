<?php
/*Recuperar el usuario para datos personales*/
require_once '../modelo/database.php';


$user = new Database();
    
    $username = $user->sanitize($_GET['username']);
    $datos = $user->obtenerUsuario($username);

require_once '../vista/datosPersonales.php';

?>