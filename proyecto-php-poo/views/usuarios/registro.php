<h1>registro de usuarios</h1>

<!-- mostramos la sesion creada al momento de grabar el registro -->
<?php if(isset($_SESSION["register"]) && $_SESSION["register"] == "complete") : ?>
    <strong>registro completado correctamente</strong>
<?php else: ?>
    <strong>falla al registrar el usuario</strong>
<?php endif; ?>

<form action="<?=base_url?>usuarios/save" method="POST">
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" required />
    <label for="apellidos">apellido</label>
    <input type="text" name="apellidos" required />
    <label for="email">email</label>
    <input type="email" name="email" required />
    <label for="password">password</label>
    <input type="password" name="password" required />

    <input type="submit" value="registrarse" />
</form>