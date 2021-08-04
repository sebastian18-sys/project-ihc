


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$titulo = $_POST['titulo'];
	$mision = $_POST['mision'];
	$vision = $_POST['vision'];
	$direccion = $_POST['direccion'];
	$google_maps = $_POST['google_maps'];
	$facebook = $_POST['facebook'];
	$twitter = $_POST['twitter'];
	$servicios1 = $_POST['servicios1'];
	$servicios2 = $_POST['servicios2'];
$servicios3 = $_POST['servicios3'];

//$target_dir = "images/";


	

	mysqli_query($con,"update configuracion set titulo='$titulo',mision='$mision',vision='$vision',direccion='$direccion',google_maps='$google_maps',facebook='$facebook',twitter='$twitter',servicios1='$servicios1',servicios2='$servicios2',servicios3='$servicios3' ")or die(mysqli_error());

	echo "<script type='text/javascript'>alert('empresa actualizado correctamente!');</script>";
	echo "<script>document.location='configuracion.php'</script>";










		


?>
