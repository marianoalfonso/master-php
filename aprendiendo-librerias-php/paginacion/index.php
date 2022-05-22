<?php
    require_once "../vendor/autoload.php";

    // conexion DB
    $conexion = new mysqli("localhost","root","","notas_master");
    $conexion->query("SET NAMES 'utf8'");

    // consulta a paginar
    $consulta = $conexion->query("select * from notas");
    $numero_elementos = $consulta->num_rows;

    var_dump($numero_elementos);

    $pagination = new Zebra_Pagination();
    $pagination->records($numero_elementos);

?>