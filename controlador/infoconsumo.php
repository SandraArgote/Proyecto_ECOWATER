<?php

/* Para recuperar el suaurio para el consumo */
require_once '../modelo/database.php';

$user = new Database();

$username = $user->sanitize($_GET['username']);
$datos = $user->obtenerUsuario($username);

require_once '../vista/consumo.php';
?>

