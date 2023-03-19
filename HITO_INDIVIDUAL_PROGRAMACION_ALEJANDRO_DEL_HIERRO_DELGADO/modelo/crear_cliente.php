<?php

$continuar = 'n';

foreach($_POST as $campo => $valor){
    //echo "- ". $campo ." = ". $valor;
    if ($campo == ''){
        $continuar = 'n';
    }else{
        $continuar = 's';
    }

}

if ($continuar == 'n'){
    header("Location:../controlador/nuevo_comercializadora.php");
}else{
   // echo 'TODO CORRECTO, VAMOS A GUARDAR EN LA BASE DE DATOS';

   $nuevonombre = $_POST['nombre'];
   $apellidos = $_POST['apellidos'];
   $contraseña = $_POST['contraseña'];

   include('../modelo/conexion.php');
   include('../modelo/funcionesBDD.php');

   $resultado = setComercializadora($link, $nuevonombre, $apellidos, $contraseña);

   if ($resultado == 'OK'){
    header("Location:../controlador/login.php");
   }else{
    header("Location:\programacion\CRUD3\controlador\nuevo_Comercializadora.php");
   }


}


?>