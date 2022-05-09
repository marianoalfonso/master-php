<?php require_once "includes/redireccion.php"; ?>  <!-- ver que es esto -->
<?php require_once "includes/conexion.php"; ?>
<?php require_once "includes/helpers.php"; ?>

<?php require_once "includes/cabecera.php"; ?>
<?php require_once "includes/lateral.php"; ?>

<!-- caja principal -->
<div id="principal">
    <h1>crear entradas</h1>
    <p> 
        ingresa la descripcion de la entrada para
        describir el item
    </p>
    <br/>
    <form action="guardarEntrada.php" method="POST">
        <label for="titulo">titulo de la entrada</label>
        <input type="text" name="titulo" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?> 

        <label for="descripcion">descripcion</label>
        <textarea name="descripcion"></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?> 
        
        <label for="categoria">categoria</label>
        <select name="categoria">
            <?php
                $categorias = conseguirCategorias($conexion);
                if(!empty($categorias)):    //si no esta vacio hago el bucle de la linea siguiente
                while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
            <option value="<?=$categoria["id"]?>">
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

<?php require_once 'includes/pie.php' ?>