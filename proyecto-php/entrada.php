<?php require_once "includes/conexion.php"; ?>
<?php require_once "includes/helpers.php"; ?>
<?php
    $entrada_actual = obtenerEntrada($conexion, $_GET['id']); //indice superglobal que contiene el id de la categoria
    if(!isset($entrada_actual['id'])){
        header("location: index.php");  //si no existe la entrada, redirigimos al index
    }
?>
<?php require_once "includes/cabecera.php"; ?>
<?php require_once "includes/lateral.php"; ?>
<!-- main content -->
<div id="principal">
<!-- siempre conviene que haya un H1 en la pagina por los buscadores -->
    <?php
        $entrada = obtenerEntrada($conexion, $_GET['id']); //indice superglobal que contiene el id de la categoria

    ?>
    <h 1><?=$entrada_actual['titulo']; ?></h> <!-- muestro el titulo de la entrada actual -->
    
    <!-- PODEMOS HACER UN LINK A UNA CATEGORIA GENERAL -->
    <a href="categoria.php?id=<?=$entrada_actual['categoria_id'] ?>">
        <h2><?=$entrada_actual['categoria']; ?></h2> <!-- muestro la categoria de la entrada actual -->
    </a>
    
    <h4><?=$entrada_actual['fecha']; ?></h4> <!-- muestro la fecha de la entrada actual -->
    
    <!-- obtenemos el nombre de usuario -->
    <?php
        $usuario = obtenerUsuario($conexion, $entrada_actual["usuario_id"]);
        if(isset($usuario)): ?>

    <h4>autor: <?=$usuario['apellidos'].' '.$usuario['nombre']; ?></h4> <!-- muestro los datos del usuario -->

    <?php
        endif;
    ?>

    <p>
        <?=$entrada_actual['descripcion']; ?>   <!-- muestro la descripcion de la entrada actual -->
    </p><br>

    <!-- verificamos que la sesion del usuario este activa
    y que se corresponda con el id de usuario de la entrada en pantalla 
    si se cumple, mostramos los dos botones -->
    <?php if(isset($_SESSION["usuario"]) && $_SESSION["usuario"]["id"] == $entrada_actual["usuario_id"]): ?>

        <a href="editar_entrada.php?id=<?=$entrada_actual["id"] ?>" class="boton boton-verde">editar entrada</a>
        <a href="borrar_entrada.php?id=<?=$entrada_actual["id"] ?>" class="boton boton-rojo">borrar entrada</a>

    <?php endif; ?>
</div>

<?php require_once "includes/pie.php "; ?>