<?php

    

    $inicio = $_GET['numero1'];
    $fin = $_GET['numero2'];

    if(empty($inicio)){
        echo "la variable INICIO esta vacia";
        exit;
    } else {
        echo "la variable INICIO tiene datos";
    }

    if(isset($_GET["numero1"])) {
        for($x = $inicio; $x <= $fin; $x++) {
            echo "<h3>el numero es $x</h3>";
        }
    } else {
        echo "numero no valido";
    }

?>