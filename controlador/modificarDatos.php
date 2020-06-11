<?php

include("../modelo/database.php");
$datos = new Database();

if (isset($_POST) && !empty($_POST)) {
    
    
    $nombre = $datos->sanitize($_POST['nombre']);
    $apellidos = $datos->sanitize($_POST['apellidos']);
	$edad = $datos->sanitize($_POST['edad']);
	$sexo = $datos->sanitize($_POST['sexo']);
	$estadoCivil = $datos->sanitize($_POST['estadoCivil']);
	$correo = $datos->sanitize($_POST['correo']);
    $calle = $datos->sanitize($_POST['calle']);
    $numero = $datos->sanitize($_POST['numero']);
    $colonia = $datos->sanitize($_POST['colonia']);
    $codigoPostal = $datos->sanitize($_POST['codigoPostal']);
    $idUsuario = $datos->sanitize($_POST['idUsuario']);
    $username = $datos->sanitize($_POST['user']);
    
	//$idProducto = intval($_POST['idProducto']);
	$res = $datos->update($nombre,$apellidos,$edad, $sexo, $estadoCivil, $correo, $calle, $numero, $colonia, $codigoPostal,$idUsuario);
	if ($res) {
		$message = "Datos actualizados con éxito";
		$class = "alert alert-success";
		
		header("Location:../controlador/info.php?username=".$username);
	
	} else {
		$message = "No se pudieron actualizar los datos";
		$class = "alert alert-danger";
	}

?>
	<div class="<?php echo $class ?>">
		<?php echo $message; ?>
	</div>
<?php
}
//$datos_producto = $producto->single_record($idProducto);
?>