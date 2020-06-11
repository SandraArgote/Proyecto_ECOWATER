<?php
require_once '../modelo/usuarioModel.php';
//require_once 'inicio.php';

$obUser = new UsuarioModel();
//$inicio= new InicioControlador();

if(isset($_REQUEST["iniciar"])){
    $resultado = $obUser->validarUsuario($_REQUEST["username"],$_REQUEST["password"]);
    if($resultado==1){
        session_start();
        $_SESSION["s1"]=$_REQUEST["username"];
        header("Location:../controlador/inicio.php");
    } else 
    echo "<script>alert('usuario o contraseña no validos')</script>";
    }
 require_once '../vista/iniciarsesion.php';


?>