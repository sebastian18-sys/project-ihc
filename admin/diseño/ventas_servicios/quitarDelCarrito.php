<?php
if(!isset($_GET["indice"])) return;
$indice = $_GET["indice"];

session_start();
array_splice($_SESSION["carrito_servicios"], $indice, 1);

  echo "<script>document.location='../ventas_servicios/servicios_agregar.php?status=3'</script>";
  
?>