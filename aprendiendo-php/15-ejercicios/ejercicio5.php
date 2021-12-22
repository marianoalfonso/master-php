<?php
$tabla = array(
    "accion" => array("gta 5","call or duty","pugh"),
    "aventura" => array("assains creed","crash bandicoot","prince of persia"),
    "deportes" => array ("fifa 19","pes19","motogp")
);
$categorias = array_keys($tabla);
?>

<table border="5">
    <?php require_once "ejercicio5encabezado.php"; ?>
    <?php require_once "ejercicio5include.php"; ?>
</table>