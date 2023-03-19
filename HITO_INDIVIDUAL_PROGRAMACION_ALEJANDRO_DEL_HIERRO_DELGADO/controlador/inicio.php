

<!--Incluimos la cabecera de nuestra página-->

<?php 
    include("../vistas/cabecera_html_general.php");
    include("../vistas/cabecera.php");

    include("../vistas/cabecera_tabla_comercializadora.php");

    include("../modelo/conexion.php");
    include("../modelo/funcionesBDD.php");

    include("../controlador/tabla_comercializadora.php");

    // Incluimos el pie de nuestra web

    include("../vistas/pie.php"); 
    include("../vistas/fin_html_general.php");
?>