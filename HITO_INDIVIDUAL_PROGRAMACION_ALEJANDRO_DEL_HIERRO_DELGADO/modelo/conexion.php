<?php 
    $host = "localhost";
    $usuario = "root";
    $contrasenia = "";
    $base_de_datos = "hitobdd";
    $link = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
    if ($link->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }    
?>