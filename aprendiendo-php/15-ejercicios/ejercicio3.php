<!--
comprobar si una variable esta vacia
rellenarla con texto minuscula
mostrarla en mayuscula y negrita

-->

<?php

$variable = $_GET['texto'];
if(empty($variable)) {
    $variable = "texto autorrellenado";
    echo "variable original: $variable<br>";
    echo "varoable alterada: ".strtoupper($variable);
} else {
    echo "variable original: $variable<br>";
    echo "varoable alterada: <strong>".strtoupper($variable)."</strong>";
}

?>