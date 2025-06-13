<?php
    $controlador = 'paginas';
    $accion = 'inicio';
    global $vis;
    $vis = 'invisible';

    if(isset($_GET['controlador']) && isset($_GET['accion'])) { // Verificaque existe el controlador y la accion
        if($_GET['controlador'] != '' && $_GET['accion'] != '') { // Verifica que no esten vacios
            $controlador = $_GET['controlador']; // Asigna el controlador
            $accion = $_GET['accion'];  // Asigna la accion
        }         
    }
    require_once("vistas/plantilla.php");  // Icrusta la plantilla

?>