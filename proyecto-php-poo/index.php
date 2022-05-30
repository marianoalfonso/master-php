<?php
    // invocamos el controller
        // require_once 'controllers/usuarioController.php';
        // require_once 'controllers/notaController.php';

    // iniciamos la sesion
    session_start();
    // reemplazamos los includes anteriores por el autoLoad
    require_once 'autoload.php';
    // incluimos la conexion a la base de datos para todo el proyecto
    require_once 'config/db.php';
    // incluimos los parametros generales
    require_once 'config/parameters.php';
    // incluimos los helpers
    require_once 'helpers/utils.php';
    // incluimos el header
    require_once 'views/layout/header.php';
    // incluimos el sidebar
    require_once 'views/layout/sidebar.php';

    // todo este proceso se llama CONTROLADOR FRONTAL
    // tomo la accion por parametro y la ejecuto dinamicamente
    // ej:
    // http://localhost/master-php/aprendiendo-php-mvc/?action=mostrarTodos
    // http://localhost/master-php/aprendiendo-php-mvc/?action=crearUsuario

    // chequeamos que exista el controller
    if(isset($_GET['controller'])) {
        $nombre_controlador = $_GET['controller'].'Controller';
    // chequeamos si el controlador y la accion vienen vacios para rutearlos a los valores por default
    } elseif(!isset($_GET['controller']) && !isset($_GET['action'])) {
        $nombre_controlador = controller_default;
        // si existe controlador O action
    } else {
        $error = new erroresController();
        $error->error404();    
        exit();    
    }

    // chequeamos que exista la clase del controller
    if(class_exists($nombre_controlador)) {
        $controlador = new $nombre_controlador();
        // y luego chequeamos que exista el metodo
        if(isset($_GET["action"]) && method_exists($controlador, $_GET["action"])) {
            $action = $_GET["action"];
            $controlador->$action();
        } elseif(!isset($_GET['controller']) && !isset($_GET['action'])) {
            $action_default = action_default;
            $controlador->$action_default();
        } else {
            $error = new erroresController();
            $error->error404();
        }
    } else {
        $error = new erroresController();
        $error->error404();
    }

    // incluimos el footer
    require_once 'views/layout/footer.php';

    
?>