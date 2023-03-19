<?php
//Esta funcion hace un select a la tabla y muestra todos sus registros
function getTodos($link){

    // Leer todos los registros de la tabla usuarios:
    $registros = mysqli_query($link, "SELECT * FROM usuario");

    return $registros;
}

function getComercializadora($link, $nombre, $apellidos, $contraseña){

    $sql = "SELECT * FROM `usuario` WHERE nombre ='".$nombre."' AND apellidos = '".$apellidos."' AND contraseña = '".$contraseña."'";

    $registros = mysqli_query($link,$sql);

    return $registros;


}

function getComercializadoraById($link, $id){

    $sql = "SELECT * FROM `usuario` WHERE idusuario = ".$id;

    $registros = mysqli_query($link,$sql);

    return $registros;

}

function setComercializadora($link, $nombre, $apellidos, $contraseña){

    $estado = '';

    $sql = "INSERT INTO usuario (nombre, apellidos, contraseña) VALUES ('$nombre', '$apellidos', '$contraseña')";
    $dataset = mysqli_query($link, $sql);

    if ($dataset){
        $estado = 'OK';
    }else{
        $estado = 'ERROR';
    }

    return $estado;
}

function updateComercializadora($link, $id, $nombre, $apellidos, $contraseña){
    $estado = '';

    //$sql = "INSERT INTO comercializadoras (nombre, email, telefono, logo, activa) VALUES ('$nombre', '$email', '$telefono', '$logo', '$activa')";
    
    $sql = "UPDATE usuario 
            SET nombre='".$nombre."',
            apellidos='".$apellidos."',
            contraseña='".$contraseña."'
            WHERE idusuario=".$id;

    $dataset = mysqli_query($link, $sql);

    if ($dataset){
        $estado = 'OK';
    }else{
        $estado = 'ERROR';
    }

    return $estado;
}

function deleteComercializadoraById($link, $id){

    $sql = "DELETE FROM `usuario` WHERE idusuario = ".$id;

    $registros = mysqli_query($link,$sql);

    return $registros;

}


?>