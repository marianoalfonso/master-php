<?php
    require_once "../vendor/autoload.php";

    // conexion DB
    $conexion = new mysqli("localhost","root","","notas_master");
    $conexion->query("SET NAMES 'utf8'");

    // consulta a paginar (cuenta los elementos totales)
    $consulta = $conexion->query("select count(id) as 'total' from notas");
    $numero_elementos = $consulta->fetch_object()->total;
    $numero_elementos_pagina = 2;

    // paginamos
    $pagination = new Zebra_Pagination();
    // elementos a paginar
    $pagination->records($numero_elementos);
    // elementos por pagina
    $pagination->records_per_page($numero_elementos_pagina);

    // pagina actual
    $page = $pagination->get_page();
    $pagina_desde = (($page - 1) * $numero_elementos_pagina);
    // ej: pagina actual: 10
    //     $numero_elementos_pagina: 2
    //     ((10 - 1) * 2, 2) --> registro 18, 2 registros (18 y 19)

    // consulta
    $notas = $conexion->query("select * from notas limit $pagina_desde, $numero_elementos_pagina"); 


    // incluimos hoja de estilo para que le de formato a la paginacion (tomado de la pagina de ejemplos del componente)
    echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

    // mostramos los elementos
    while($nota = $notas->fetch_object()) {
        echo "<h2>{$nota->titulo}</h2>";
        echo "<h3>{$nota->descripcion}</h3><hr>";
    }

    // renderizamos los enlaces de la paginacion
    $pagination->render();

?>