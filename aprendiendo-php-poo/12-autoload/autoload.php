<?php

// podemos usar cualquier nombre, por estandar es este
// recorre todo el path indicado y autocarga las clases
function app_autoloader($class){
    // clases (carpeta general)
    require_once 'clases/'.$class.'.php';
}

spl_autoload_register('app_autoloader');