<?php

define('nombre','mariano');
define('web','www.google.com');

echo "<h2>".nombre."</h2>";
echo "<h2>".web."</h2>";

$web = "www.apple.com";
echo "<h2>".$web."</h2>";

//constantes predefinidas
echo 'sistema operativo: '.PHP_OS.'<br>';
echo 'version de PHP: '.PHP_VERSION.'<br>';
echo 'ruta extensiones: '. PHP_EXTENSION_DIR.'<br>';

?>