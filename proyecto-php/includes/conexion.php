<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $db = 'blog_master';
    $conexion = mysqli_connect($servidor,$usuario,$password,$db);

    if(!$conexion){
        die('error en la conexion de la DB'.mysqli_connect_error());
    }

    mysqli_query($conexion, "SET NAMES 'utf-8'");


    //SIEMPRE antes de iniciar la sesion, hay que verificar que no este iniciada
    if(!isset($_SESSION)){
        session_start();
    }
    //iniciamos la sesion
    