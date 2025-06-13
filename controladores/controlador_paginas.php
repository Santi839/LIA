<?php

    class ControladorPaginas {
        public function inicio() {
            global $vis;
            $vis = 'visible';
            include_once('vistas/paginas/inicio.php');
        }

        public function servicios() {
            include_once('vistas/paginas/servicios.php');
        }

        public function testimonios() {
            include_once('vistas/paginas/testimonios.php');
        }        public function quienessomos() {
            include_once('vistas/paginas/quienes_somos.php');
        }
        public function contactanos() {
            include_once('vistas/paginas/contactanos.php');
        }
        public function consulta() {
            include_once('vistas/paginas/consulta.php');
        }
        
    }    
?>