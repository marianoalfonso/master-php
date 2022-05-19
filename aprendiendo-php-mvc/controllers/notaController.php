<?php

class NotaController {

    public function listar(){
        // referenciamos el modelo
        require_once 'models/notaModel.php';

        // logica accion del controlador
        $nota1 = new Nota();
        $nota1->setNombre('hello $nota1');
        $nota1->setContenido('hello world PHP MVC');

        // referenciamos la vista
        require_once 'views/nota/listarView.php';
    }

    public function crear(){

    }
    
    public function borrar(){

    }

}