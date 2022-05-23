<?php

    require_once '../vendor/autoload.php';

    $foto_original = 'pastas.jpg';
    $guardar_en = 'fotomodificada.jpg';

    $thumb = new PHPThumb\GD($foto_original);
    $altoImagen = $_GET["alto"];
    $anchoImagen = $_GET["ancho"];
    echo 'alto de la imagen: '.$_GET["alto"].'<br>';
    echo 'ancho de la imagen: '.$_GET["ancho"].'<br>';
    ob_clean();
    $thumb->resize($altoImagen,$anchoImagen);
    $thumb->show();




?>