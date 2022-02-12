<?php

// 1. tener una funcion
// 2. la funcion debe validar un email con filter_var
// 3. recoger una variable por GET y validarla
// 4. mostrar el resultado


function ValidarEmail($email) {
    $status = "no valido";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = "valido";
    }
    return $status;
}

if(isset($_GET['email'])) {
    echo ValidarEmail($_GET['email']);
} else {
    echo 'pasa por get un email';
}
?>
