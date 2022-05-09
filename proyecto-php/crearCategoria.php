<?php 
    require_once 'includes/redireccion.php';
    require_once 'includes/cabecera.php';
    require_once 'includes/lateral.php';
?>

<!-- caja principal -->
<div id="principal">
    <h1>crear categorias</h1>
    <p> 
        agrega nuevas categorias para que los usuarios puedan
        usarlas para sus entradas
    </p>
    <br/>
    <form action="guardarCategoria.php" method="POST">
        <label for="nombre">nombre de la categorias</label>
        <input type="text" name="nombre" />

        <input type="submit" value="guardar" />
    </form>

</div>

<?php require_once 'includes/pie.php' ?>