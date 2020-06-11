<?php

require_once '../modelo/database.php';


$user = new Database();
if (isset($_POST) && !empty($_POST)) {


	$nombre = $user->sanitize($_POST['nombre']);
	$apellidos = $user->sanitize($_POST['apellidos']);
        $edad = $user->sanitize($_POST['edad']);
        $sexo = $user->sanitize($_POST['sexo']);
        $estadoCivil = $user->sanitize($_POST['estadoCivil']);
        $correo = $user->sanitize($_POST['correo']);
        $calle = $user->sanitize($_POST['calle']);
        $numero = $user->sanitize($_POST['numero']);
		$colonia = $user->sanitize($_POST['colonia']);
		$usuario = $user->sanitize($_POST['user']);
		$codigoPostal = $user->sanitize($_POST['codigoPostal']);
		$res = $user->createDatos($nombre, $apellidos, $edad,$sexo, $estadoCivil, $correo, $calle, $numero, $colonia, $codigoPostal,$usuario);
        
	if ($res) {
		$message = "Datos insertados con éxito";
		$class = "alert alert-success";
		header('Location: ../vista/inicio.php');
	} else {
		$message = "No se lograron guardar los datos";
		$class = "alert alert-danger";
	}
	

?>
	<div class="<?php echo $class ?>">
		<?php echo $message; ?>
	</div>
<?php
}

?>


