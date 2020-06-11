<?php

class Database {
    /* CONEXION */

    protected $con;
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "proyectodae";

    function __construct() {
        $this->connect_db();
    }

    public function connect_db() {
        $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        if (mysqli_connect_error()) {
            die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
        }
    }

    public function sanitize($var) {
        $return = mysqli_real_escape_string($this->con, $var);
        return $return;
    }

    //INSERTAR
    public function create($nombre,$apellidos,$username, $password) {
        $sql = "INSERT INTO `usuario` (username, password) VALUES ('$username','$password')";
        $res = mysqli_query($this->con, $sql);
        $consulta = "SELECT idUsuario FROM usuario ORDER BY idUsuario desc LIMIT 1";
            $resultado = mysqli_query($this->con, $consulta);
            $return = mysqli_fetch_object($resultado);            
            $idUsuario = $return->idUsuario;
            $sql2 = "INSERT INTO `datosusuario` (nombre, apellidos, idUsuario) VALUES ('$nombre','$apellidos',$idUsuario)";
            $res = mysqli_query($this->con, $sql2);
        if ($res) {   
            return true;
        } else {
            return false;
        }
        
          
    }

 
    public function createDatos($nombre, $apellidos, $idUsuario) {
         
            //$consulta = "SELECT * FROM usuario WHERE username = '$usuario'";
            //$resultado = mysqli_query($this->con, $consulta);
            //$return = mysqli_fetch_object($resultado);            
            //$idUsuario = $return->idUsuario;
            $sql = "INSERT INTO `datosusuario` (nombre,apellidos,idUsuario) VALUES ('$nombre','$apellidos','$idUsuario[0]')";
            $res = mysqli_query($this->con, $sql);

        if($res){
            return true;
        }else{
            return false;
        }
    }

    /* CONSULTAR
      public function read(){
      $sql = "SELECT * FROM producto";
      $res = mysqli_query($this->con, $sql);
      return $res;
      } */

    // MODIFICAR
      public function obtenerUsuario($username){
      $sql = "SELECT * FROM usuario JOIN datosusuario ON usuario.idUsuario = datosusuario.idUsuario WHERE usuario.username = '$username'";
      $res = mysqli_query($this->con, $sql);
      $usuario = mysqli_fetch_object($res);
      return $usuario;
      }


      public function update($nombre,$apellidos,$edad,$sexo,$estadoCivil,$correo,$calle,$numero,$colonia,$codigoPostal,$idUsuario){
      $sql = "UPDATE datosusuario SET nombre='$nombre', apellidos= '$apellidos',edad = $edad, sexo='$sexo', estadoCivil='$estadoCivil', correo='$correo', calle='$calle', numero='$numero',
      colonia ='$colonia', codigoPostal = '$codigoPostal' WHERE idUsuario = $idUsuario";
      $res = mysqli_query($this->con, $sql);
      if($res){
      return true;
      }else{
      return false;
      }
      } 
      
      
      /*PARA LOS VALORES DE LAS PREGUNTAS Y RESPUESTAS*/
      
      public function insertar($pregunta, $valorPregunta,$idUsuario){
            $sql = "INSERT INTO `respuestas` (numeroPreg, valorResp, idUsuario) VALUES ('$pregunta','$valorPregunta', $idUsuario)";
            $res = mysqli_query($this->con, $sql);
            if ($res) {
                return true;
            } else {
                return false;
            }
        }

    //ELIMINAR
      public function delete($idUsuario){
          
      $sql = "DELETE FROM respuestas WHERE idUsuario=$idUsuario";
      $resultadodelete = mysqli_query($this->con, $sql);
      if($resultadodelete){
      return true;
      }else{
      return false;
      }
      } 
}
?>	

