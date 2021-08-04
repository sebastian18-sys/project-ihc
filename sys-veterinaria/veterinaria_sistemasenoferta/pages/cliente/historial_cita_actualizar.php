<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
  $id_cliente = $_POST['id_cliente'];
  $codigo = $_POST['codigo'];
  $descripcion = $_POST['descripcion'];




  mysqli_query($con,"update historial set descripcion='$descripcion' where codigo='$codigo'")or die(mysqli_error());

  
 echo "<script>document.location='ver_citas.php?codigo=$codigo&id_cliente=$id_cliente'</script>";
  
?>