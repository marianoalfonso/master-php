<?php

$peliculas = array('matrix','spiderman','superman');
$musicos = ['sting','phil collins','john mayer','sheryl crowe'];

$personas = array(
    'nombre' => 'Mariano',
    'apellido' => 'Alfonso'
);

var_dump($peliculas);
var_dump($personas);

echo "pelicula: $peliculas[2]<br>"; 
echo "musico: $musicos[0]";

echo "<h2>listado de musicos</h2>";
echo "<ul>";
foreach($musicos as $musico) {
    echo "<li>".$musico."</li>";
}
echo "</ul>";

echo "<h2>listado de peliculas</h2>";
echo "<ul>";
foreach($peliculas as $key => $pelicula) {
    echo "<li>".$key." - ".$pelicula."</li>";
}
echo "</ul>";

echo "<h2>";
echo "apellido: $personas[apellido]<br>";
echo "nombre: $personas[nombre]";
echo "</h2>";

//arrays multidimensionales
$contactos = array (
    array(
        'nombre' => 'Mariano',
        'apellido' => 'Alfonso',
        'email' => 'mag@gmail.com'
    ),
    array(
        'nombre' => 'Belen',
        'apellido' => 'Torres',
        'email' => 'bet@gmail.com'
    )
);

echo $contactos[1]['apellido'];

echo"<h2>arrays multidimensionales</h2>";
foreach($contactos as $key => $contacto) {
    echo "nombre: $contacto[nombre]<br>";
}

?>