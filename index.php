<?php

    require_once "./config/configIndex.php";

    $nombreControlador=$_GET["c"] ?? C_DEFECTO;
    $nombreMetodo=$_GET["m"] ?? M_DEFECTO;

    $rutaControlador=__DIR__."/".RUTA_CONTROLADOR.$nombreControlador.".php";

    require_once $rutaControlador;

    $objControlador=new $nombreControlador();

    $datos=$objControlador->$nombreMetodo();

    $vista=__DIR__."/".RUTA_VISTAS.$objControlador->vista.".php";

    extract($datos);
    require_once $vista;

?>