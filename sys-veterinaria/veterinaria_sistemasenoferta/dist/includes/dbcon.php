<?php
$dbuser = 'admin';
$dbpass = 'adminadmin';
$dbname = 'base_datos_ihc';
$con = mysqli_connect("base-datos-proyecto.cwspvo6flss8.us-east-2.rds.amazonaws.com",$dbuser,$dbpass,$dbname);


if ($con){
  ?>
  <h1>Hola</h1>
  <?php
}

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


try{
	$base_de_datos = new PDO('mysql:host=base-datos-proyecto.cwspvo6flss8.us-east-2.rds.amazonaws.com;dbname=' . $dbname, $dbuser, $dbpass);
	 $base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>