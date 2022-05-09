<?php require_once "includes/redireccion.php"; ?>  <!-- ver que es esto -->
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



<!-- caja principal -->
<div id="principal">
    <h1>editar entrada</h1>
    <p> 
        edita tu entrada <?=$entrada_actual["titulo"] ?>
        describir el item
    </p>
    <br/>
    <form action="guardarEntrada.php?editar=<?=$entrada_actual["id"]?>" method="POST">   <!-- el parametro editar establece si es modo alta o modo edicion -->

        <label for="titulo">titulo de la entrada</label>
        <input type="text" name="titulo" value="<?=$entrada_actual["titulo"] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?> 

        <label for="descripcion">descripcion</label>
        <textarea name="descripcion"><?=$entrada_actual["descripcion"] ?></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?> 
        
        <label for="categoria">categoria</label>
        <select name="categoria">
            <?php
                $categorias = conseguirCategorias($conexion);
                if(!empty($categorias)):    //si no esta vacio hago el bucle de la linea siguiente
                while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
            <option value="<?=$categoria["id"]?>" <?=($categoria["id"] == $entrada_actual["categoria_id"]) ? 'selected="selected"' : '' ?>>
                <?=$categoria["nombre"]?>
            </option>
            <?php
                endwhile;
                endif;
            ?>
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?> 

        <input type="submit" value="guardar" />
    </form>
    <?php borrarError(); ?>
</div>






<?php require_once "includes/pie.php "; ?>