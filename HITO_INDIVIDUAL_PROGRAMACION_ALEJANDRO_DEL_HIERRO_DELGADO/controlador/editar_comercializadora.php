<?php

$id = $_GET['idusuario'];

include("../modelo/conexion.php");
include("../modelo/funcionesBDD.php");

$recordset = getComercializadoraById($link, $id);

$usuario = mysqli_fetch_assoc($recordset);

//////////////////////////////////////////////////////////////
//Creamos la pagina web
//////////////////////////////////////////////////////////////

include("../vistas/cabecera_html_general.php");
include("../vistas/cabecera.php");

////////////////////////

include("../vistas/formulario_editar_comercializadora.php");

////////////////////////

include("../vistas/pie.php"); 
include("../vistas/fin_html_general.php");





?>