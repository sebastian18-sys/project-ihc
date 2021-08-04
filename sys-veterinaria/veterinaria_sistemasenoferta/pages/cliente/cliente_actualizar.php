 <?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_cliente = $_POST['id_cliente'];
	$nombre = $_POST['nombre'];

		$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];

	$nombre_mascota = $_POST['nombre_mascota'];

$raza = $_POST['raza'];

		///finzalizo encriptacion


	mysqli_query($con,"update clientes set nombre='$nombre',telefono='$telefono',dni='$dni',nombre_mascota='$nombre_mascota',raza='$raza'  where id_cliente='$id_cliente'")or die(mysqli_error());

			

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
	echo "<script>document.location='cliente.php?id_cliente=$id_cliente'</script>";	

	




   







?>
