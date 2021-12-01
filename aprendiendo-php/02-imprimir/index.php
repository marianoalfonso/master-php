<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" /> <!---verificacion de caracteres-->
        <title>imprimir por pantalla</title>
    </head>
    <body>
        <h1>master en PHP</h1>

        <?="linea directa para un echo"?>

        <?php
            //esto es un comentario
            //que funciona dentro del php
            echo"<h3>listado de ejercicios</h3>";
            echo"<ul>"
                . "<li>plancha</li>"
                . "<li>espinales</li>"
                . "<li>burpies</li>"
                . "</ul>";
            echo "<p>parrafo donde termina la lista</p>";
        ?>
    </body>
</html>
