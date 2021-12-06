<?php

$limite=1;

while($limite <= 100) {
    if ($limite%2 == 0) {
        echo "<h2>$limite es un numero par</h2>";
    } else {
        echo "<h3>$limite es un numero impar</h3>";
    }
    $limite++;
}


?>