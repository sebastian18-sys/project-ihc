<?php

include('../layout/dbcon.php');

session_start();

$id_sesion = $_POST["id_sesion"];

$id_cliente = $_POST["cliente"];




     $fecha = date('Y-m-d');


//$monto_pagado = $_POST["monto_pagado"];




//$vuelto=$total




$sentencia_pedido = $base_de_datos->prepare("INSERT INTO ventas_servicios(fecha, id_sesion,id_cliente) VALUES (?, ?, ?);");
$sentencia_pedido->execute([$fecha,$id_sesion,$id_cliente]);

$sentencia = $base_de_datos->prepare("SELECT id_pedido FROM ventas_servicios ORDER BY id_pedido DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$id_pedido = $resultado === false ? 1 : $resultado->id_pedido;



$sentencia = $base_de_datos->prepare("INSERT INTO detalles_ventas_servicios(id_pedido, descripcion, monto) VALUES (?, ?, ?);");


foreach ($_SESSION["carrito_servicios"] as $servicios) {
//	$total += $producto->total;
	$sentencia->execute([$id_pedido, $servicios->descripcion, $servicios->monto]);

			/*$update=mysqli_query($con,"update detalle_ingreso set stock_actual=stock_actual-'$producto->cantidad' where estado='abierto' and  	iddetalle_ingreso='$$producto->iddetalle_ingreso' ");
*/
}
//$base_de_datos->commit();
unset($_SESSION["carrito_servicios"]);
$_SESSION["carrito_servicios"] = [];


//			$update=mysqli_query($con,"update caja set monto=monto+'$sub_total' where estado='abierto' and idsucursal='$idsucursal' ");
  echo "<script>document.location='../ventas_servicios/servicios_agregar.php'</script>";




?>