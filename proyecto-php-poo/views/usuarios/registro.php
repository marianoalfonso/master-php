<h1>registro de usuarios</h1>

<form action="index.php?controller=usuariosController&action=save" method="POST">
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