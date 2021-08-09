<?php

include '../../base_datos/db.php';

$codigo = $_SESSION['codigo_cama'];
$dni = $_SESSION['dni_p'];
$nombres = $_SESSION['nombres_p'];
$apellidos = $_SESSION['apellidos_p'];


$query = "UPDATE camas_uci SET  dni = '$dni',nombres = '$nombres', apellidos = '$apellidos', reservado = 1 Where codigo = '$codigo'";
$result = mysqli_query($conn, $query);
if(!$result) {
	echo 'error';

}else{
	header('Location: pacientes_uci.php');
}

	
		

	

?>
