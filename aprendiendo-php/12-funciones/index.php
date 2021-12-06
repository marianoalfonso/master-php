<?php

    for ($a = 1; $a < 10; $a++) {
        echo "<h3>numero: $a, multiplicacion: ".multiplicar($a, $a)."</h3>";
    }


    function multiplicar($numero1, $numero2) {
        $resultado = ($numero1 * $numero2);
        return $resultado;
    }

?>