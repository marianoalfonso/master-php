<?php
    require_once 'includes/redireccion.php';
    require_once 'includes/cabecera.php';
    require_once 'includes/lateral.php';
?>

<div id="principal">
    <h1>mis datos</h1>

    <?php if(isset($_SESSION['completado'])): ?>
        <div class="alerta alerta-exito"> 
            <?= $_SESSION['completado'] ?>
        </div>
    <?php elseif(isset($_SESSION['errores']['general'])): ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['errores']['general'] ?>
        </div>
    <?php endif; ?>

    <form action="actualizarUsuario.php" method="POST">
        <p>
            <label for="apellido">apellido</label>
            <input type="text" name="apellido" value="<?=$_SESSION['usuario']['apellidos']; ?>"/>
            <!-- utilizamos un operador ternario para verificar si esta seteada la variable de sesion 'errores' -->
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?> 
        </p>
        <p>
            <label for="nombre">nombre</label>
            <input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre']; ?>" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
        </p>
        <p>
            <label for="email">eMail</label>
            <input type="email" name="email" value="<?=$_SESSION['usuario']['email']; ?>"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
        </p>

        <p>
            <input type="submit" name="submit" value="actualizar" />  <!-- name="submit" nos permite analizar en el formulario POST el $_POST['submit'] -->
        </p>
    </form>

<?php echo borrarError(); ?>


</div>



<?php require_once 'includes/pie.php' ?>
