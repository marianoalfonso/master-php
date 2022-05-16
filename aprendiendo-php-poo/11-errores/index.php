<?php

    try {
        if(isset($_GET["id"])){
            echo "<h1>el parametro es: {$_GET["id"]}</h1>";
        } else {
            throw new Exception("falta el parametro ID");
        }
    } catch(Exception $e) {
        echo "ha habido un error: ".$e->getMessage();
    } finally {
        echo "<br>todo correcto";
    }
    

?>