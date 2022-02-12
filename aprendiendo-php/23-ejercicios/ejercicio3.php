<?php

    $resultado = false;
    if(isset($_POST['n1']) && isset($_POST['n2'])) {
        //inicializamos la variable $resultado a false
        $numero1 = $_POST['n1'];
        $numero2 = $_POST['n2'];
    //    $resultado = false;
        if(isset($_POST['sumar'])) {
            $resultado = $numero1 + $numero2;
        } elseif(isset($_POST['restar'])) {
            $resultado = $numero1 - $numero2;
        } elseif(isset($_POST['multiplicar'])) {
            $resultado = $numero1 * $numero2;
        } elseif(isset($_POST['dividir'])) {
            if($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = -1;
            }
        }
    }

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>calculadora</title>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
    </head>
    <body>
        <h2>calculadora en PHP</h2><br/>

        <form action="" method="POST">
            <p>
                <label for="n1">numero 1: </label> 
                <input type="number 1" name="n1"><br/>
            </p>

            <p>
            <label for="n2">numero 2: </label> 
                <input type="number 2" name="n2"><br/>
            </p>

            <input type="submit" value="+" name="sumar"/>
            <input type="submit" value="-" name="restar"/>
            <input type="submit" value="*" name="multiplicar"/>
            <input type="submit" value="/" name="dividir"/><br/><br/>

        </form>

        <?php
            if($resultado != false) {
                echo 'el resultado es: '.$resultado;
            } else {
                echo'todavia no existe solicitud de calculo<br/>';
            }
        ?>


    </body>
</html>