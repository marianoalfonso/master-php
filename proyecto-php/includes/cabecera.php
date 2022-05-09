<?php
    require_once "conexion.php";
    require_once 'includes/helpers.php';   // importamos la libreria de funciones
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <title>blog de noticias</title>
</head>
<body>
    
    <!-- header -->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                blog de noticias
            </a>
        </div>

        <!-- menu -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">inicio</a> 
                </li>
                <!-- mediante un bucle obtenemos las categorias y recorremos el array imprimiendo la cabecera -->
                <!-- obtenemos categorias invocando a la funcion de helpers.php -->
                <!-- crea una variable $categoria que es un array con todos los datos de la categoria que esta recorriendo -->
                <?php $categorias = conseguirCategorias($conexion);
                    if(!empty($categorias)):
                        while($categoria = mysqli_fetch_assoc($categorias)): 
                ?> 
                    <li>
                        <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a> 
                    </li>
                <?php 
                    endwhile; 
                    endif;
                ?>

                <li>
                    <a href="index.php">sobre mi</a> 
                </li>
                <li>
                    <a href="index.php">contacto</a> 
                </li>
            </ul>
        </nav>

        <div class="clearfix"></div>  <!-- limpia los flotados, asi lo de abajo no se monta con el menu -->

    </header>

    <div id="contenedor">