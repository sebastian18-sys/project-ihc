<?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$nombre = $_POST['nombre'];

	$telefono = $_POST['telefono'];
	$dni = $_POST['dni'];

		$nombre_mascota = $_POST['nombre_mascota'];
		$raza = $_POST['raza'];


		$total = 0;

		
	
	$query2=mysqli_query($con,"select * from clientes where dni='$dni'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('dni ya existe!');</script>";
			echo "<script>document.location='cliente.php'</script>";
		}
		else
		{




			mysqli_query($con,"INSERT INTO clientes(nombre,telefono,dni,nombre_mascota,raza)
				VALUES('$nombre','$telefono','$dni','$nombre_mascota','$raza')")or die(mysqli_error($con));

			
			echo "<script>document.location='cliente.php'</script>";


	
	




   



}





?>
