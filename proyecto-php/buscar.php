    <?php

        // verificamos si existe algo que buscar
        if(!isset($_POST['busqueda'])){
            header("location: index.php");  //si no existe la categoria, redirigimos al index
        }
      
    ?>

    <?php require_once "includes/cabecera.php"; ?>
    <?php require_once "includes/lateral.php"; ?>
    <!-- main content -->
    <div id="principal">
    <!-- siempre conviene que haya un H1 en la pagina por los buscadores -->
        <h1>busqueda: <?=$_POST["busqueda"]; ?></h1>
        
        <?php
            $entradas = obtenerAllEntradas($conexion, null, null, $_POST['busqueda']); //indice superglobal que contiene el id de la categoria;
            if(!empty($entradas) && mysqli_num_rows($entradas) >= 1): 
                while($entrada=mysqli_fetch_assoc($entradas)):
            ?>
                    <article class="entrada">  <!--iguales a un DIV pero semanticamente mejores para los navegadores-->
                    <!--You should use a class when you expect there to be multiple similar elements that you would like to retain similar styling-->
                        <a href="entrada.php?id=<?=$entrada['id']?>">
                            <h2><?=$entrada['titulo'];?> </h2>
                            <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha'];?></span>

                            <p>
                                <?=substr($entrada['descripcion'],0).'  . . .'?> <!-- limitamos la salida a 180 caracteres -->
                            </p>
                        </a>
                    </article>
            <?php 
                endwhile; 
                else: 
            ?>
            <div class="alerta">no se encontraron datos</div>
            <?php
                endif;
            ?>

    </div>

<?php require_once "includes/pie.php "; ?>