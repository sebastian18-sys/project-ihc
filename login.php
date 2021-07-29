<?php

$dbhost ="localhost";
$dbuser ="root";
$dbpass ="your_password";
$dbname ="relocadb2";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass, $dbname);
if (!$conn){
    die("no hay conexión: ".mysqli_connect_error());
}

$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM login where username='".$username."' and password='".$password."'");
$nr = mysqli_num_rows($query);

if ($nr ==1){
    echo "ingreso correcto";
    echo "<script type='text/javascript'>document.location='dashboard/index'</script>";
}else if($nr==0){
    //header("Location: contacto.php");
    //echo '<script language="javascript">alert("Error al ingresar Contraseña y Usuario");</script>';
    header("Location: contacto.php");
    
}

?>