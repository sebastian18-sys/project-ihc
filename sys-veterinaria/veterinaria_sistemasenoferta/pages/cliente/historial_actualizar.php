 <?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_historial = $_POST['id_historial'];
	$descripcion = $_POST['descripcion'];

	$id_cliente = $_POST['id_cliente'];




		///finzalizo encriptacion


	mysqli_query($con,"update historial set descripcion='$descripcion' where id_historial='$id_historial'")or die(mysqli_error());

			

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
	echo "<script>document.location='historial.php?id_cliente=$id_cliente'</script>";	

	




   







?>
