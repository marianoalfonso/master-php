<?php
    // invocamos el controller
        // require_once 'controllers/usuarioController.php';
        // require_once 'controllers/notaController.php';

    // reemplazamos los includes anteriores por el autoLoad
    require_once 'autoload.php';
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
    if(isset($_GET["controller"]) && class_exists($_GET["controller"])) {
        $nombre_controlador = $_GET["controller"];
        $controlador = new $nombre_controlador();
        // y luego chequeamos que exista el metodo
        if(isset($_GET["action"]) && method_exists($controlador, $_GET["action"])) {
            $action = $_GET["action"];
            $controlador->$action();
            // comprobamos si existe el controlador
    
        } else {
            echo 'la METODO no existe<br>';
        }
    } else {
        echo 'el CONTROLADOR o CLASE no existe<br>';
    }

    // incluimos el footer
    require_once 'views/layout/footer.php';
?>