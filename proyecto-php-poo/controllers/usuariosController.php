<?php

    class usuariosController {
        public function index() {
            echo 'controlador: usuarios<br>accion: index';
        }

        public function registro() {
            // renderizamos la vista registro.php
            require_once 'views/usuarios/registro.php';
        }

        public function save() {
            // obtenemos los datos que nos llegan desde la vista registro.php
            if(isset($_POST)) {
                var_dump($_POST);
            }
        }
    }

?>