<?php

include('../../base_datos/db.php');

if (isset($_POST['Registrar_Familiar'])) {


//   $password = $_POST['Contraseña'];
//   $pass_cript = password_hash($password, PASSWORD_DEFAULT);

  $dni=$_SESSION['Dni'];
  $name_family = $_POST['nombres'];
  $lastname_family = $_POST['apellidos'];
  $birthday_family = $_POST['fecha_nacimiento'];
  $dni_family = $_POST['dni'];
  $gender_family = $_POST['genero'];
  $phone_family = $_POST['telefono'];
  $parentesc_family = $_POST['parentesco'];

  // $query = "INSERT INTO usuarios (usuario, correo, contraseña) VALUES ('$usu', '$email', '$password')";
  $query = "INSERT INTO familiares (dni, nombre, apellidos, fecha_nacimiento, dni_familiar, genero, telefono, parentesco) VALUES ('$dni', '$name_family', '$lastname_family', '$birthday_family', '$dni_family', '$gender_family', '$phone_family', '$parentesc_family')";
  $result = mysqli_query($conn, $query);  //Query
  if(!$result) {
    die("Query Failed.");
    // include('./register-error.php');
  } else {
    header("Location: familia.php");
  }
}


?>