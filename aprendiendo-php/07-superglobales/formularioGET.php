<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>formulario en PHP</title>
    </head>
    <body>
        <h1>formulario GET en PHP</h1>
        <form method="GET" action="recibirGET.php">
            <p>
                <label for="nombre">nombre</label>
                <input type="text" name="nombre" />
            </p>
            <p>
                <label for="apellido">apellido</label>
                <input type="text" name="apellido" />
            </p>
            <p>
                <label for="edad">edad</label>
                <input type="number" name="edad" />
            </p>
            
            <input type="submit" value="enviar" />
        </form>
    </body>
</html>
<?php


?>