<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset+"utf-8" />
        <title>includes en PHP 8</title>
    </head>
    <body>
        <!--cabecera-->
        <?php
            include 'includes/menu.php';
        ?>
        <!--contenido-->
        <div class="contenido">
            <h2>pagina de datos sobre el contacto</h2>
            <p>texto de prueba de la pagina de datos sobre el contacto</p>
        </div>

        <!--footer-->
        <?php
            include 'includes/footer.php'
        ?>
    </body>
</html>