
<?php
include('../layout/dbcon.php');






$descripcion = $_POST["descripcion"];
$fecha_reserva = $_POST["fecha_reserva"];
$fecha_registro = $_POST["fecha_registro"];
$id_cliente = $_POST["id_cliente"];




$sentencia = $base_de_datos->prepare("SELECT * FROM empresa  WHERE id_empresa = ? LIMIT 1;");
$sentencia->execute([1]);
$citas = $sentencia->fetch(PDO::FETCH_OBJ);


session_start();
# Buscar producto dentro del cartito
$indice = false;

# Si no existe, lo agregamos como nuevo
if ($indice === false) {
    $citas->descripcion = $descripcion;
   $citas->fecha_reserva = $fecha_reserva;
      $citas->fecha_registro = $fecha_registro;
  
//        $producto->impu = $producto->precio_venta*$cantidad;
    array_push($_SESSION["carrito_cita"], $citas);
} 
  echo "<script>document.location='../cliente/cita_agregar.php?id_cliente=$id_cliente'</script>";
//header("Location: ../pos.php");
