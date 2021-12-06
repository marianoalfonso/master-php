<?php

$numero = $_GET['tabla'];
//$numero = 6;
$a = 1;
while($a<11) {
    echo $numero." * ".$a." = ".$numero * $a."<br>";
    $a++;
}

?>