<!--
    definir un array con 8 numeros
    recorrerlo y mostrarlo
    ordenarlo y mostrarlo
    mostrar su longitud
    buscar un elemento
-->

<?php

$numeros = [60,20,10,30,80,50,70,40];

echo"<h2>recorro el array</h2>";
echo"<ul>";
foreach($numeros as $key => $numero) {
    echo"<li>".$key." - ".$numero."</li>";
}
echo"</ul>";

echo"<h2>ordeno el array</h2>";
echo"<ul>";
asort($numeros);
foreach($numeros as $key => $numero) {
    echo"<li>".$key." - ".$numero."</li>";
}
echo"</ul>";

echo"<h2>muestro longitud del array</h2>";
$longitud = sizeof($numeros);
echo"longitud: $longitud";

echo"<h2>busco el  numero 30 en el array</h2>";
$busqueda = array_search(30, $numeros);
echo"el numero 30 esta en el indice $busqueda<br>";
echo "valor de indice $busqueda: $numeros[$busqueda]";

?>