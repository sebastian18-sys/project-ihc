<?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'






     $fecha_cierre = date('Y-m-d');








  mysqli_query($con,"update caja set estado='cerrado',fecha_cierre='$fecha_cierre'  where estado='abierto'")or die(mysqli_error());


	echo "<script>document.location='caja.php'</script>";	










	
?>
