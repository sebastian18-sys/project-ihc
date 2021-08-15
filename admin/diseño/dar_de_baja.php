<?php

include '../../base_datos/db.php';

if(isset($_GET['dni'])) {
  $dni = $_GET['dni'];
  $query = "UPDATE pacientes SET asegurado = 0 WHERE dni = $dni;";
  $result = mysqli_query($conn, $query);
  if(!$result) {

    die("Query Failed.");

  }else{


    header('Location: asegurados.php');

  }


  
}

?>