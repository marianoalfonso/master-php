<?php

    require_once "../vendor/autoload.php";

    $frutas = array("manzanas","naranjas","bananas");

    // clase estatica
    // \FB (fireBug)
    \FB::log($frutas);

    echo 'hola mundo';

    \FB::log("muestra esto en la consola");

?>