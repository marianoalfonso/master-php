<?php
// ejercicio1
// crear una sesion que aumente o disminuya su valor en 1 en funcion del valor del parametro get counter
// esta en 1 o 0

    session_start(); //iniciamos la sesion

    if(!isset($_SESSION["numero"])) {   //si no existe la sesion NUMERO
        $_SESSION["numero"] = 0;
        echo 'la sesion no estaba iniciada<br/>';
    }

    //si la sesion existe y el valor es 1
    if(isset($_GET['counter']) && $_GET['counter'] == 1) {
        echo 'valor del parametro:'.$_GET['counter'].'<br/>';
        $_SESSION["numero"]++;
    }

    //si la sesion existe y el valor es 0
    if(isset($_GET['counter']) && $_GET['counter'] == 0) {
        echo 'valor del parametro:'.$_GET['counter'].'<br/>';
        $_SESSION["numero"]--;
    }

    //si la sesion existe y el valor es 2
    if(isset($_GET['counter']) && $_GET['counter'] == 2) {
        echo 'reseteando el valor del contador<br/>';
        $_SESSION["numero"] = 0;
        session_destroy(); //elimino la variable de sesion
    }

?>
<h2>valor de la sesion NUMERO = <?=$_SESSION["numero"]?></h2>
<a href="ejercicio1.php?counter=1">aumentar el valor</a><br/>
<a href="ejercicio1.php?counter=0">disminuir el valor</a><br/>
<a href="ejercicio1.php?counter=2">resetear el valor</a><br/>