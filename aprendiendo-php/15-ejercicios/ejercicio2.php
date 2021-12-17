<!--

agregar valores a un array mientras su longitud
sea menor a 120
mostrar la informacion del array en pantalla

-->

<?php
$datos = array();
$longitud = sizeof($datos);

while($longitud < 120) {
    $dato = rand();
    array_push($datos, $dato);
    $longitud++;
}

echo"<h3>datos del array generado</h3>";
foreach($datos as $key => $dato) {
    echo"indice ".$key." => ".$dato."<br>";
}

?>