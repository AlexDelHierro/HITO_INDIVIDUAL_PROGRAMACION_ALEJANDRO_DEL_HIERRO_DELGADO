<?php

$id = $_GET['idusuario'];

include('../modelo/conexion.php');
include('../modelo/funcionesBDD.php');

$estado = deleteComercializadoraById($link, $id);

if ($estado == 'OK'){
    header("Location:../controlador/inicio.php");
   }else{
    header("Location:\programacion\CRUD3\controlador\editar_comercializadora.php?idusuario?".$id);
   }




?>