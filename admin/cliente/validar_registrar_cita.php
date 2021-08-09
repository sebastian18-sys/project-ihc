<?php

include('../../base_datos/db.php');

if (isset($_POST['Reservar_Cita'])) {


//   $password = $_POST['Contraseña'];
//   $pass_cript = password_hash($password, PASSWORD_DEFAULT);
  $dni=$_SESSION['Dni'];
  $speciality = $_POST['especialidad'];
  $date = $_POST['fecha'];
  $professional = $_POST['medico'];
  $time = $_POST['hora'];

  

  // $query = "INSERT INTO usuarios (usuario, correo, contraseña) VALUES ('$usu', '$email', '$password')";
  $query = "INSERT INTO cita (fecha, hora, dni, especialidad, responsable, estado) VALUES ('$date', '$time', '$dni', '$speciality', '$professional', 0)";
  $result = mysqli_query($conn, $query);  //Query
  if(!$result) {
    die("Query Failed.");
    // include('./register-error.php');
  } else {
    header("Location: registrar_cita.php");
  }
}


?>