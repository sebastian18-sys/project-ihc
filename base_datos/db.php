<?php

session_start();

$host     = "aa8kb1lc9042hc.cwspvo6flss8.us-east-2.rds.amazonaws.com"; //endpoint generado en el RDS
$port     = 3306;
$socket   = "";
$user     = "admin";
$password = "adminadmin";
$dbname   = "base_datos_ihc";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('No se puede conectar a la base de datos' . mysqli_connect_error());

?>