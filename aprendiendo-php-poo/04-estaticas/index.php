<?php

    require_once 'configuracion.php';

    // podemos acceder a las propiedades y metodos sin instanciar objetos
    Configuracion::setColor("blue");
    Configuracion::setEntorno("localhost");
    Configuracion::setNewsletter(true);

    echo Configuracion::$color."<br>";
    echo Configuracion::$entorno."<br>";
    echo Configuracion::$newsletter."<br>";


?>