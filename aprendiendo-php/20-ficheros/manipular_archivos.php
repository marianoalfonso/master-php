<?php
    //copiar
    copy('fichero_texto.txt','fichero_copiado.txt') or die('error al copiar');
    
    //renombrar
    rename('fichero_copiado.txt','archivo.txt') or die('error al renombrar');

    //borrar
    unlink('archivo.txt')or die('error al borrar');

    if(file_exists('fichero_texto.txt')) {
        echo 'el archivo <strong>fichero_texto.txt</strong> existe<br>';
    } else {
        echo "el archivo <strong>fichero_texto.txt</strong> no existe<br>";
    }

    if(file_exists('archivo.txt')) {
        echo "el archivo <strong>archivo.txt</strong> existe<br>";
    } else {
        echo "el archivo <strong>archivo.txt</strong> no existe<br>";
    }

?>
