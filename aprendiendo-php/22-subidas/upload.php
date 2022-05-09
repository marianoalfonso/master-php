<?php

    $archivo = $_FILES['archivo']; //archivo es el nombre del campo del formulario
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];

    
    if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png'|| $tipo == 'image/CR2' || $tipo == 'image/gif' || $tipo == 'image/mp4') {
        // echo 'nombre:'.$nombre.'<br>';
        // echo 'tipo:'.$tipo.'<br>';
        if(!is_dir('imagenes')) {
            mkdir('./imagenes', 0777); //creo el directorio con todos los permisos
        }
        move_uploaded_file($archivo['tmp_name'], 'imagenes/'.$nombre);
        echo '<h3>imagen subida correctamente</h3>';
        header("Refresh: 5; URL=index.php");
        echo 'seras redirigido a la pagina principal en 5 segundos ...';
    } else {
        header("Refresh: 3; URL=index.php");
        //Refresh permite modificar las cabeceras
        //espera 5 segundos y refresca con el parametro de la URL
        
        echo '<h2><strong>el archivo subido no es una imagen</strong></h2><br>';
        echo 'seras redirigido a la pagina principal en 3 segundos ...';
    }



?>