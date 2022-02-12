<?php

    //abrimos el archivo
    $archivo = fopen("fichero_texto.txt", "a+");
    // r (lectura)
    // x (ejecucion)
    // w (escritura)
    // a+ (lectura/escritura)

    //leo el arehivo
    while(!feof($archivo)) {
        $contenido = fgets($archivo);
        echo $contenido,"<br>";
    }

    //escribo el archivo
    fwrite($archivo, "Hello, yes, I'm from Argentina, nice to meet you");

    fclose($archivo); //cerramos el archivo

?>