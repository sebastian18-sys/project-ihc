<?php

function conectarDB(): mysqli{
    $db = mysqli_connect('localhost', 'root', 'your_password', 'relocaDB2');

    if(!$db){
        echo "No se pudo conectar ";
        exit;
    }else{
        echo "exito al conectar ";
    }
    return $db;
}