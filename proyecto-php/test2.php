<?php

require_once 'includes\conexion.php';
require_once 'includes\helpers.php';

// $categorias = conseguirCategorias($conexion);
// var_dump($categorias);

$entradas = obtenerEntradas($conexion);
var_dump($entradas);


die();