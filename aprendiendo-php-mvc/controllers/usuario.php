<?php

// el controlador encapsula ACCIONES
class UsuarioController {

    public function mostrarTodos() {
        // cargamos el controlador
        // no ponemos .. porque el require lo hace desde el index
        require_once 'models/usuario.php';
        $usuario1 = new Usuario();
        // ejecutamos el procedimiento que esta en el modelo y lo mostramos en una VISTA
        $usuariosObtenidos = $usuario1->conseguirTodos();
        // requerimos la vista
        // no ponemos .. porque el require lo hace desde el index
        require_once 'views/usuario/mostrar_todos.php';
    }

    public function crearUsuario() {
        require_once "views/usuario/crear_usuario.php";
    }


}