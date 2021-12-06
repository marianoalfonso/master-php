<?php

function buscarNombre(){
    global $nombre;
    echo "<h3>nombre (inside the function): $nombre</h3>";
}

function buscarNombre2(){
    global $nombre;
    echo "<h3>nombre (inside the function2): $nombre</h3>";
}

$nombre = "mariano";
echo "<h3>nombre (outside the function): $nombre</h3>";
buscarNombre();
buscarNombre2();

$disco = "music for the spheres";
echo "<h3>el titulo del disco tiene ".strlen($disco)." caracteres</h3>";
echo "<h3>la palabra SPHERES esta en la posicion ".strpos($disco, "spheres")."</h3>";

?>