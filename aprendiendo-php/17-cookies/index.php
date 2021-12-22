<?php

setcookie("miCookie","valor de la cookie");
setcookie("miCookie2","valor 2", time() + (60*60*24*365));
echo"<h3><strong>valor de las cookies seteadas</strong></h3>";
require_once("menu.php");
?>

