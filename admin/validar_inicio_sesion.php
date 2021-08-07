<?php
include('../base_datos/db.php');

$usuario_global = $_POST['Usuario'];
  
$contrasena = $_POST['Password'];

if (isset($_POST['iniciar_sesion'])) {
  
  $query = "SELECT * FROM asegurados";

  $result = mysqli_query($conn, $query);

  while($row = mysqli_fetch_assoc($result)) { 
    
    
    // descifrado    
    if($row['usuario']== $usuario_global &&  $row['password']==$contrasena && $usuario_global != null && $contrasena!= null && $row['usuario'] != "admin" && $row['password'] != "admin" ){

        
        //$_SESSION['usuario-login-activo'] = $row['usuario'];
        echo 'HOALALLSA';
        header("Location: cliente/admin.php");
        break;

        
    }else if ($usuario_global== "admin" &&  $contrasena=="admin"){ 
        header("Location: diseño/admin.php");
        break;
    } else {
        header("Location: error/inicio_sesion_error.php");
    }
    } 
}
?>