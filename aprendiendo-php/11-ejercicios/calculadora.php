<?php

    if (isset($_GET["numeroA"]) && isset($_GET["numeroB"])) {
        $numeroA = $_GET["numeroA"];
        $operacion = $_GET["operacion"];
        $numeroB = $_GET["numeroB"];
        switch($operacion) {
            case "+":
                echo "es una suma";
                $resultado = $numeroA + $numeroB;
                echo "<h3>$numeroA + $numeroB = ".$resultado."</h3>";
                break;
            case "-":
                echo "es una resta";
                $resultado = $numeroA - $numeroB;
                echo "<h3>$numeroA + $numeroB = ".$resultado."</h3>";
                break;
            case "*":
                echo "es una multiplicacion";
                $resultado = $numeroA * $numeroB;
                echo "<h3>$numeroA + $numeroB = ".$resultado."</h3>";
                break;
            case "/":
                echo "es una division";
                $resultado = $numeroA / $numeroB;
                echo "<h3>$numeroA + $numeroB = ".$resultado."</h3>";
                break;
        }
    } else {
        echo "error en los datos de ingreso";
    }

?>