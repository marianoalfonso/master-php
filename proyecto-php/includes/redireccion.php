<?php

//SIEMPRE antes de iniciar la sesion, hay que verificar que no este iniciada
if(!isset($_SESSION)){
    session_start();
}

//si el usuario no esta seteado, redirige al index
if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
}