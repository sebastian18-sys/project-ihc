<?php
if(!isset($_POST["total"])) exit;
include('../layout/dbcon.php');

session_start();

$id_sesion = $_POST["id_sesion"];
$total = $_POST["total"];
$id_cliente = $_POST["cliente"];

$monto_pagado = $_POST["total"];


     $fecha = date('Y-m-d');



//$monto_pagado = $_POST["monto_pagado"];

$sub_total=0;


//$vuelto=$total




$sentencia_pedido = $base_de_datos->prepare("INSERT INTO pedidos(fecha, id_sesion,id_cliente,monto_pagado) VALUES (?, ?, ?,?);");
$sentencia_pedido->execute([$fecha, $id_sesion,$id_cliente,$monto_pagado]);

$sentencia = $base_de_datos->prepare("SELECT id_pedido FROM pedidos ORDER BY id_pedido DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$id_pedido = $resultado === false ? 1 : $resultado->id_pedido;



$sentencia = $base_de_datos->prepare("INSERT INTO detalles_pedido(id_pedido, id_producto, cantidad, id_cliente,fecha) VALUES (?, ?, ?, ?, ?);");


foreach ($_SESSION["carrito"] as $producto) {
//	$total += $producto->carrito;
	$sentencia->execute([$id_pedido, $producto->id_producto, $producto->cantidad, $id_cliente,$fecha]);

			$update=mysqli_query($con,"update producto set stock=stock-'$producto->cantidad' where id_pro='$producto->id_producto' ");

}
//$base_de_datos->commit();
unset($_SESSION["carrito"]);
$_SESSION["carrito"] = [];


			$update=mysqli_query($con,"update caja set monto=monto+'$monto_pagado' where estado='abierto' 	");
  echo "<script>document.location='../ventas/pos.php'</script>";




?>