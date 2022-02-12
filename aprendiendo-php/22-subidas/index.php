<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>subir imagenes</title>
    </head>
    <body>
        <h1>subir imagenes con PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo" />
            <input type="submit" value="subir" />
        </form>\

        <h1>listado de imagenes</h1>
        <?php
            $gestor = opendir('./imagenes');    //abrimos el directorio de imagenes
            if($gestor == TRUE) {   //si lo pudo abrir
                while(($imagen = readdir($gestor)) == TRUE) {   //mientras en $imagen se asigne un archivo del array $gestor
                    if($imagen != '.' && $imagen != '..') {
                        echo "<img src='imagenes/$imagen' width='200px'/><br/>";  
                    }
                }
            }
        ?>
    </body>
</html>