<?php
session_start();
include('../../dist/includes/dbcon.php');

	$id_cliente = $_POST['id_cliente'];
	$codigo = $_POST['codigo'];
	$tipo_historial = $_POST['tipo_historial'];
	$descripcion = $_POST['descripcion'];
$fecha_registro = $_POST['fecha_registro'];





    $id_sesion=$_SESSION['id']; 

		
	





			mysqli_query($con,"INSERT INTO historial(descripcion,fecha_registro,tipo_historial,id_cliente,id_sesion)
				VALUES('$descripcion','$fecha_registro','$tipo_historial','$id_cliente','$id_sesion')")or die(mysqli_error($con));

			
			echo "<script>document.location='historial.php?id_cliente=$id_cliente'</script>";


	





?>
