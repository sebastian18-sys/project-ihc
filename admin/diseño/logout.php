<?php 
// include 'dbcon.php';
include('../base_datos/db.php');
	session_start();
	session_destroy();
	header('Location:../../index.html');
?>

<!DOCTYPE html>
<html>
<head>

</head>	
<body>
<div style="width:150px;margin:auto;height:500px;">
<?php
	// include('../dist/includes/dbcon.php');
	$date = date("Y-m-d H:i:s");
	$correo=$_SESSION['var_user'];
	$remarks="se ha desconectado el sistema en ";  
	mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));
	
	session_destroy();
	
 	echo '<meta http-equiv="refresh" content="2;url=../index.html">';
 
?>
	<div id="cssload-pgloading">
		<div class="cssload-loadingwrap">
			<ul class="cssload-bokeh">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>
