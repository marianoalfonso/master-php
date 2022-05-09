<?php

session_start();

if(isset($_SESSION['usuario'])) {           //si existe esta variable de sesion significa que hay alguien logeado
    session_destroy();      //destruye todas las sesiones
}

header("Location: index.php"); //redirigimos a la pagina principal

?>