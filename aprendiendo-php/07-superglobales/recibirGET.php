<?php

echo "<h1>".$_GET['apellido']."</h1>";
echo "<h1>".$_GET['nombre']."</h1>";
if(isset($_GET['edad'])) {
    echo "<h1>".$_GET['edad']."</h1>";
} else {
    echo 'no existe el dato edad';
}


var_dump($_GET);

?>