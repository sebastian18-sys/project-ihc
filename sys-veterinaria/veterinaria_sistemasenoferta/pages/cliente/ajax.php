<?php
/*define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'ventas_sistemasenoferta');*/
include('../layout/dbcon.php');
//$connexion = new mysqli("localhost", "root", "", "ventas_sistemasenoferta");

$html = '';
$key = $_POST['key'];

$result = $con->query(
    'SELECT * FROM clientes 
    WHERE  nombre_mascota LIKE "%'.strip_tags($key).'%"'
);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {                
        $html .= '<div><a class="suggest-element" data="'.utf8_encode($row['nombre_mascota'].' de  '.$row['nombre']).'" id="cliente'.$row['id_cliente'].'">'.utf8_encode($row['nombre'].' de  '.$row['nombre_mascota']).'</a></div>';
    }
}
echo $html;
?>