<?php
include('../base_datos/db.php');

$usuario_global = $_POST['Dni'];
  
$contrasena = $_POST['Password'];

if (isset($_POST['iniciar_sesion'])) {
  
  $query = "SELECT * FROM pacientes";

  $result = mysqli_query($conn, $query);

  while($row = mysqli_fetch_assoc($result)) { 
    
    
    // descifrado    
    if($row['dni']== $usuario_global &&  $row['password']==$contrasena && $usuario_global != null && $contrasena!= null && $row['dni'] != "123" && $row['password'] != "123" ){

        $_SESSION['Dni'] = $row['dni'];
        $_SESSION['var_user'] = $row['correo'];
        $_SESSION['nombre'] = $row['nombres'];
        $_SESSION['apellido'] = $row['apellidos'];
        $_SESSION['telefono'] = $row['celular'];
        $_SESSION['seguro'] = $row['asegurado'];
        //$_SESSION['usuario-login-activo'] = $row['usuario'];
        echo 'HOALALLSA';
        header("Location: cliente/inicio.php");
        break;

        
    }else if ($usuario_global== "123" &&  $contrasena=="123"){ 
        header("Location: diseño/admin.php");
        break;
    } else {
        header("Location: error/inicio_sesion_error.php");
    }
    } 
}
?>