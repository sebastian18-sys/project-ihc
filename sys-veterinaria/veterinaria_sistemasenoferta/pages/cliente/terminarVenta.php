<?php

include('../layout/dbcon.php');

session_start();

$id_sesion = $_POST["id_sesion"];

$id_cliente = $_POST["cliente"];
$descripcion = $_POST["descripcion"];
$tipo_historial = $_POST["tipo_historial"];




     $fecha_registro = date('Y-m-d');


//$monto_pagado = $_POST["monto_pagado"];




//$vuelto=$total




$sentencia_pedido = $base_de_datos->prepare("INSERT INTO historial(descripcion, fecha_registro,tipo_historial,id_cliente,id_sesion) VALUES (?, ?, ?, ?, ?);");
$sentencia_pedido->execute([$descripcion,$tipo_historial,$tipo_historial,$id_cliente,$id_sesion]);

$sentencia = $base_de_datos->prepare("SELECT id_historial FROM historial ORDER BY id_historial DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$id_historial = $resultado === false ? 1 : $resultado->id_historial;



$sentencia = $base_de_datos->prepare("INSERT INTO citas(descripcion, fecha_registro, fecha_reserva,codigo) VALUES (?, ?, ?, ?);");


foreach ($_SESSION["carrito_cita"] as $citas) {
//	$total += $producto->total;
	$sentencia->execute([ $citas->descripcion, $citas->fecha_registro, $citas->fecha_reserva,$id_historial]);

			/*$update=mysqli_query($con,"update detalle_ingreso set stock_actual=stock_actual-'$producto->cantidad' where estado='abierto' and  	iddetalle_ingreso='$$producto->iddetalle_ingreso' ");
*/
}
//$base_de_datos->commit();
unset($_SESSION["carrito_cita"]);
$_SESSION["carrito_cita"] = [];


//			$update=mysqli_query($con,"update caja set monto=monto+'$sub_total' where estado='abierto' and idsucursal='$idsucursal' ");
  echo "<script>document.location='../cliente/cita_agregar.php?id_cliente=$id_cliente'</script>";




?>