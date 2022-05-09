<?php
require_once 'coche.php';

// $coche = new Coche('rojo','ferrari','aventador',340,760,2);
// var_dump($coche);

// $coche->color = 'amarillo';
// var_dump($coche);

// $coche->setMarca('bmw');
// var_dump($coche);

$coche1 = new Coche('rojo','ferrari','aventador',340,760,2);
$coche2 = new Coche('amarillo','bmw','15',270,460,5);
$coche3 = new Coche('azul','audi','a5',260,560,5);
// var_dump($cocheX);
echo $coche1->mostrarInformacion('azul');