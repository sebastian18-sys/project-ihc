


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

		$id_usuario = $_POST['id_usuario'];



$password = $_POST['password'];
	$password2 = $_POST['password2'];
	


if ($password==$password2) {
		# code...
		
	


	
//encriptando contraseña
	$pass=md5($password);
		$salt="a1Bz20ydqelm8m1wql";
		$pass=$salt.$pass;
		///finzalizo encriptacion

	mysqli_query($con,"update usuario set password='$pass' where id='$id_usuario'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
	echo "<script>document.location='inicio.php'</script>";			
	
	
}
else{
		echo "<script type='text/javascript'>alert(' password no coinciden!');</script>";
	echo "<script>document.location='editar_usuario_password.php'</script>";	
}


	


?>
