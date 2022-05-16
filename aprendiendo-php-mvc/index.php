<h1>Modelo Vista Controlador</h1>
<?php
    // invocamos el controller
    require_once 'controllers/usuario.php';
    $controlador1 = new UsuarioController();

    // todo este proceso se llama CONTROLADOR FRONTAL
    // tomo la accion por parametro y la ejecuto dinamicamente
    // ej:
    // http://localhost/master-php/aprendiendo-php-mvc/?action=mostrarTodos
    // http://localhost/master-php/aprendiendo-php-mvc/?action=crearUsuario
    if(isset($_GET["action"]) && method_exists($controlador1, $_GET["action"])) {
        $action = $_GET["action"];
        $controlador1->$action();
        // comprobamos si existe el controlador
        if(isset($_GET["controller"]) && class_exists($_GET["controller"])) {
            $nombre_controlador = new $_GET["controller"];
            $controlador = new $nombre_controlador();
        } else {
            echo 'el controller no existe<br>';
        }
    } else {
        echo 'la pagina no existe<br>';
    }