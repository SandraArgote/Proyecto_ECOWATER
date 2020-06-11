<?php
require_once 'database.php';

class UsuarioModel extends Database {
    function __construct(){
        parent::__construct();
    }
  function validarUsuario($username,$password){
      $para=$this->con->prepare("select * from usuario where username=? and password=?");
      //$sql = "SELECT * FROM usuario where username=? and password =?";
      //$res = mysqli_query($this->con, $sql);
      $para->bind_param('ss',$a,$b);
      $a=$username;
      $b=$password;
      $para->execute();
      while($para->fetch()){
          return 1;
      }
          return 0;
  }  

}


?>