<?php
require_once '../modelo/database.php';


$user = new Database();
if (isset($_POST) && !empty($_POST)) {

	$nombre = $user->sanitize($_POST['nombre']);
	$apellidos = $user->sanitize($_POST['apellidos']);
	$username = $user->sanitize($_POST['username']);
	$password = $user->sanitize($_POST['password']);
	/*$password = $user->sanitize($_POST['sexo']);
	$password = $user->sanitize($_POST['estadoCivil']);
	$password = $user->sanitize($_POST['correo']);
	$password = $user->sanitize($_POST['calle']);
	$password = $user->sanitize($_POST['numero']);
	$password = $user->sanitize($_POST['colonia']);
	$password = $user->sanitize($_POST['codigoPostal']);*/
	
	$res = $user->create($nombre,$apellidos,$username,$password);
        
	if ($res) {
		$message = "Datos insertados con éxito";
		$class = "alert alert-success";
		header('Location: contolUser.php');
	} else {
		$message = "No se pudieron insertar los datos";
		$class = "alert alert-danger";
	}
	

?>
	<div class="<?php echo $class ?>">
		<?php echo $message; ?>
	</div>
<?php
}

?>

