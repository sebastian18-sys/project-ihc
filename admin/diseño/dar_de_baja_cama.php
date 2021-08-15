<?php

include '../../base_datos/db.php';

if(isset($_GET['codigo'])) {
  $codigo = $_GET['codigo'];
  $query = "UPDATE `base_datos_ihc`.`camas_uci` SET `dni` = NULL, `nombres` = NULL, `apellidos` = NULL, `reservado` = '0' WHERE (`codigo` = '$codigo')";

  $result = mysqli_query($conn, $query);
  if(!$result) {

    die("Query Failed.");

  }else{


    header('Location: pacientes_uci.php');

  }


  
}

?>