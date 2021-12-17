<!--
4 variables
    1 de tipo array
    1 de tipo string
    1 de tipo int
    1 de tipo bool
imprimir un mensaje segun el tipo de variable
-->

<?php

$colores = ['amarillo','verde','azul'];
$nombre = 'michael';
$edad = 99;
$argentino = TRUE;

echo"la variable COLORES es del tipo ".gettype($colores)."<br>";
echo"la variable NOMBRE es del tipo ".gettype($nombre)."<br>";
echo"la variable EDAD es del tipo ".gettype($edad)."<br>";
echo"la variable ARGENTINO es del tipo ".gettype($argentino)."<br>";

?>