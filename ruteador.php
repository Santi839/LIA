<?php
    include_once('controladores/controlador_'.$controlador.'.php'); // Incluye el controlador
    $objControlador =  "Controlador".ucfirst($controlador); // Crea el nombre del controlador
    $controlador = new $objControlador();  // Instancia el controlador
    
    // Limpiar el nombre de la acción para que sea un método válido
    $metodoLimpio = str_replace('-', '', $accion); // Elimina los guiones
    
    if(method_exists($controlador, $metodoLimpio)) {
        $controlador->$metodoLimpio(); // Llama al método limpio
    } else {
        // Si no existe el método, redirige a inicio
        /* $controlador->inicio(); */
    }
?>