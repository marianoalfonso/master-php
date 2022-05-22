<?php

// el controlador encapsula ACCIONES
class UsuarioController {

    public function mostrarTodos() {
        // cargamos el controlador
        // no ponemos .. porque el require lo hace desde el index
        require_once 'models/usuarioModel.php';
        $usuario1 = new Usuario();

        $usuarios = $usuario1->conseguirTodos('usuarios');

        // requerimos la vista
        // no ponemos .. porque el require lo hace desde el index
        require_once 'views/usuario/mostrar_todosView.php';
    }

    public function crearUsuario() {
        require_once "views/usuario/crear_usuarioView.php";
    }


}