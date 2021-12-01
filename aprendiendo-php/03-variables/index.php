<?php

$variable = 'hola mundo desde una variable';
//en el string, el caracter \ hace que no lea la comilla
//y podamos usarla como literal
$nombre[0] = 'hola mundo desde la \'posicion\' 0 de un array';
$nombre[1] = 'hola mundo desde la posicion 1 de un array';
$numero = 44;
$verdadero = true;

echo '<h3>'.$variable.'</h3>';
?>
<hr/>
<?php
echo '<h4>nombre 1: '.$nombre[0].'</h4>';
echo '<h4>nombre 2: '.$nombre[1].'</h4>';
echo '<h4>numero: '.$numero.'</h4>';
echo '<h4>boolean: '.$verdadero.'</h4>';

var_dump($numero);  
var_dump($nombre);

?>