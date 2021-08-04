<?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$codigo = $_POST['codigo'];
	$fecha_registro = $_POST['fecha_registro'];
	$descripcion = $_POST['descripcion'];
 	$fecha_reserva = $_POST['fecha_reserva'];

$id_cliente = $_POST['id_cliente'];

$total=0;

mysqli_query($con,"INSERT INTO citas(descripcion,fecha_registro,fecha_reserva,codigo)
VALUES('$descripcion','$fecha_registro','$fecha_reserva','$codigo')")or die(mysqli_error($con));		
		



  echo "<script type='text/javascript'>alert('Se ha agregado cita correctamente!');</script>";


  echo "<script>document.location='ver_citas.php?codigo=$codigo&id_cliente=$id_cliente'</script>";


?>
