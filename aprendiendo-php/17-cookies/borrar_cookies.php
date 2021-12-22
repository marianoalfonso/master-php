<?php
//unset($_COOKIE["miCookie"]);
setcookie("miCookie2","valor 2", time() - 100);
echo"cookie eliminada con UNSET)";
header('Location:ver_cookies.php');
?>