
<?php
include('../layout/dbcon.php');






$descripcion = $_POST["descripcion"];
$monto = $_POST["monto"];




$sentencia = $base_de_datos->prepare("SELECT * FROM empresa  WHERE id_empresa = ? LIMIT 1;");
$sentencia->execute([1]);
$servicios = $sentencia->fetch(PDO::FETCH_OBJ);


session_start();
# Buscar producto dentro del cartito
$indice = false;

# Si no existe, lo agregamos como nuevo
if ($indice === false) {
    $servicios->descripcion = $descripcion;
   $servicios->monto = $monto;
  
//        $producto->impu = $producto->precio_venta*$cantidad;
    array_push($_SESSION["carrito_servicios"], $servicios);
} 
  echo "<script>document.location='../ventas_servicios/servicios_agregar.php'</script>";
//header("Location: ../pos.php");
