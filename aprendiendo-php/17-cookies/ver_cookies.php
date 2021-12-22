<?php

//variable superglobal
if(isset($_COOKIE["miCookie"])) {
    echo"<h2>".$_COOKIE["miCookie"]."</h2>";
} else {
    echo"cookie miCookie no seteada";
}

if(isset($_COOKIE["miCookie2"])) {
    echo"<h2>".$_COOKIE["miCookie2"]."</h2>";
} else {
    echo"cookie miCookie2 no seteada";
}
require_once("menu.php");
?>

