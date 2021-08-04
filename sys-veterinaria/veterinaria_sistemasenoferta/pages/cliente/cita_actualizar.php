<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');
  $id_citas = $_POST['id_citas'];
  $codigo = $_POST['codigo'];
  $id_cliente = $_POST['id_cliente'];
 $descripcion = $_POST['descripcion'];

 $fecha_reserva = $_POST['fecha_reserva'];

  mysqli_query($con,"update citas set fecha_reserva='$fecha_reserva',descripcion='$descripcion' where id_citas='$id_citas'")or die(mysqli_error());

  
 echo "<script>document.location='ver_citas.php?codigo=$codigo&id_cliente=$id_cliente'</script>";
  
?>