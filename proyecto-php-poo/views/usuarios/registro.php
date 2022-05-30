<h1>registro de usuarios</h1>

<!-- mostramos la sesion creada al momento de grabar el registro -->
<?php if(isset($_SESSION["register"]) && $_SESSION["register"] == "complete") : ?>
    <strong class="alert_green">registro completado correctamente</strong>
<?php elseif(isset($_SESSION["register"]) && $_SESSION["register"] == "failed") : ?>
    <strong class="alert_red">falla al registrar el usuario, ingresa los datos correctos</strong>
<?php endif; ?>
<!-- eliminamos la sesion -->
<?php Utils::deleteSession('register'); ?>

<form action="<?=base_url?>usuarios/save" method="POST">
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" />
    <label for="apellidos">apellido</label>
    <input type="text" name="apellidos" />
    <label for="email">email</label>
    <input type="email" name="email" />
    <label for="password">password</label>
    <input type="password" name="password" />

    <input type="submit" value="registrarse" />
</form> 