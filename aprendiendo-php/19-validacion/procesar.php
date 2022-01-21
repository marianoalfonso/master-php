<?php

$error = "faltan valores";
if(empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['edad']) 
|| empty($_POST['email']) || empty($_POST['password'])) {

    $error = "faltan valores";
    header("Location:index.php?error=$error");

} else {

    $error = "ok";
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(is_string($nombre) && )

}

?>

<!DOCTYPE html>
<html>
    <title>validacion de formularios PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
<body>
    <?php if($error == 'ok'): ?>
        <h1>datos validados correctamente</h1>
        <p><?=$nombre?></p>
        <p><?=$apellido?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
        <p><?=$password?></p>
    <?php endif; ?>

</body>
</html>