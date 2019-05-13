<?php
    require_once "core/configGeneral.php";
    //include "vista/plantilla.php";

    require_once "controlador/vistaControlador.php";
//comentario
    $plantilla = new vistaControlador();
    $plantilla->obtener_plantilla_controlador();
?>