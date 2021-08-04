<?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$codigo = $_POST['codigo'];
	$id_cliente = $_POST['id_cliente'];

  $tipo_historial = $_POST['tipo_historial'];

  $fecha_registro = $_POST['fecha_registro'];
  $descripcion = $_POST['descripcion'];









      mysqli_query($con,"INSERT INTO historial(descripcion,codigo,fecha_registro,tipo_historial,id_cliente)
        VALUES('$descripcion','$codigo','$fecha_registro','$tipo_historial','$id_cliente')")or die(mysqli_error($con));
		


$cont=0;
$descripcion_temp = array();
$fecha_registro_temp = array();
$fecha_reserva_temp = array();

$cantidad = array();

            $query1=mysqli_query($con,"select * from temporal_citas where codigo='$codigo'")or die(mysqli_error());

                      while($row1=mysqli_fetch_array($query1)){
           $cont++;
                   $descripcion_temp[] = $row1['descripcion'];
					$fecha_registro_temp[] = $row1['fecha_reserva'];
					$fecha_reserva_temp[] = $row1['fecha_reserva'];

}

$i=0;

for ($i=0; $i <$cont ; $i++) { 

             mysqli_query($con,"INSERT INTO citas(descripcion,codigo,fecha_registro,fecha_reserva)
VALUES('$descripcion_temp[$i]',$codigo,'$fecha_registro_temp[$i]','$fecha_reserva_temp[$i]')")or die(mysqli_error($con));
}


  mysqli_query($con,"delete from temporal_citas where codigo='$codigo'")or die(mysqli_error());
  echo "<script type='text/javascript'>alert('venta hecha!');</script>";
//    mysqli_query($con,"delete from temporal_pedido where  id_pedido='$num_pedido'")or die(mysqli_error());

  





  echo "<script>document.location='historial.php?id_cliente=$id_cliente'</script>";



?>
