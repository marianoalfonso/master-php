<?php

//si recibimos el post
if(isset($_POST)){ 
    require_once 'includes/conexion.php';
    //si llega el nombre de la categoria
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : false;

    //genero un array de errores
    $errores = array();
    //valida el campo nombre
    if(!empty($nombre) && !is_numeric($nombre)){
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "el nombre no es valido";
    }

    //verifico si no recibimos errores
    if(count($errores) == 0){
        $sql = "insert into categorias values (null,'$nombre');";
        $guardar = mysqli_query($conexion, $sql);
    }
    
    }
    header("Location: index.php");
?>