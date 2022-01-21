<!DOCTYPE html>
<html>
    <title>validacion de formularios PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
<body>

    <?php
        if(isset($_GET['error'])) {
            $error = $_GET['error'];
            if($error == 'faltan valores') {
                echo '<strong style="color:red">introduce todos los datos</strong>';
            }
        }
    ?>

    <form method="POST" action="procesar.php">
        <h1>validar formularios en PHP</h1>

        <label for="nombre">nombre</label><br/>
        <input type="text" name="nombre"><br/>

        <label for="apellido">apellido</label><br/>
        <input type="text" name="apellido"><br>

        <label for="edad">edad</label><br/>
        <input type="number" name="edad" required="required" pattern="[0-9]+"><br/>

        <label for="email">email</label><br/>
        <input type="email" name="email" required="required"><br/>

        <label for="password">password</label><br/>
        <input type="password" name="password" required="required" pattern="[A-Za-z]+"><br/><br/>

        <input type="submit" value="enviar"/>

    </form>
</body>
</html>