<?php

if (!empty($_POST['nombre']) or !empty($_POST['apellidos']) or !empty($_POST['contraseña'])) {

    require_once("../modelo/conexion.php");
    require_once("../modelo/funcionesBDD.php");
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $contraseña = $_POST['contraseña'];


     //Busqueda en la base de datos del Cliente

    $recordset = getComercializadora($link, $nombre, $apellidos, $contraseña);

    $numfilas = $recordset->num_rows;

    if ($numfilas <> 0){
        header("Location:../informacion.html");
    }else{
        header("Location:../index.html");
    }
  

} else{
    header("Location:../index.html");
}

?>