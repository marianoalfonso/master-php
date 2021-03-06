<?php require_once "includes/cabecera.php"; ?>

<?php require_once "includes/lateral.php"; ?>

<!-- main content -->
<div id="principal">
<!-- siempre conviene que haya un H1 en la pagina por los buscadores -->
    <h1>ultimas entradas</h1>

    <?php $entradas = obtenerEntradas($conexion);
        if(!empty($entradas)): 
            while($entrada=mysqli_fetch_assoc($entradas)):
        ?>
                <article class="entrada">  <!--iguales a un DIV pero semanticamente mejores para los navegadores-->
                <!--You should use a class when you expect there to be multiple similar elements that you would like to retain similar styling-->
                    <a href="entrada.php?id=<?=$entrada['id']?>"> <!-- linkeamos con la pagina entrada.php -->
                        <h2><?=$entrada['titulo'];?> </h2>
                        <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha'];?></span>

                        <p>
                            <?=substr($entrada['descripcion'],0).'  . . .'?> <!-- limitamos la salida a 180 caracteres -->
                        </p>
                    </a>
                </article>
        <?php endwhile; 
        endif; ?>

    <div id="ver-todas"> 
        <a href="entradas.php">ver todas las entradas</a>
    </div>

</div>

<?php require_once "includes/pie.php "; ?>
