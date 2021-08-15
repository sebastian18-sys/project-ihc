<?php

include('../base_datos/db.php');

if (isset($_POST['sign_in'])) {


//   $password = $_POST['Contraseña'];
//   $pass_cript = password_hash($password, PASSWORD_DEFAULT);

  $usuario_global = $_POST['dni'];
  $name = $_POST['nombres'];
  $lastname = $_POST['apellidos'];
  $email = $_POST['email'];
  $phone = $_POST['celular'];
  $contrasena = $_POST['password'];
  

  // $query = "INSERT INTO usuarios (usuario, correo, contraseña) VALUES ('$usu', '$email', '$password')";
  $query = "INSERT INTO pacientes (dni, nombres, apellidos, correo, celular, password, asegurado) VALUES ('$usuario_global', '$name', '$lastname', '$email', '$phone', '$contrasena', 0)";
  $result = mysqli_query($conn, $query);  //Query
  if(!$result) {
    //die("Query Failed.");
    // include('./register-error.php');
  } else {
    header("Location: exito_registro.php");
  }
}


?>