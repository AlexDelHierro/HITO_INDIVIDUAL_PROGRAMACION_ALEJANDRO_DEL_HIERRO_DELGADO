<?php

$id = $_POST['idusuario'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$contraseña = $_POST['contraseña'];



   include('../modelo/conexion.php');
   include('../modelo/funcionesBDD.php');

   $resultado = updateComercializadora($link, $id, $nombre, $apellidos, $contraseña);

   if ($resultado == 'OK'){
    header("Location:../controlador/inicio.php");
   }else{
    header("Location:\programacion\CRUD3\controlador\editar_comercializadora.php?idusuario?".$id);
   }



?>