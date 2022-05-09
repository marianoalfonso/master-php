<?php

if(isset($_POST)) {
    require_once 'includes/conexion.php';
    $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($conexion, $_POST['apellido']) : false;
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, $_POST['email']) : false;

    $errores = array();

    if(!empty($_POST['apellido'])) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['apellido'] = 'el apellido no es valido';
    }

    if(!empty($_POST['nombre'])) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = 'el nombre no es valido';
    }

    if(!empty($_POST['email'])) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['email'] = 'el email no es valido';
    }


    //si no hay errores
    $guardar_usuario = false;
    //buscamos si hubo error
    if(count($errores) == 0) {
        //insertamos en la base de datos
        $guardar_usuario = true;

        //chequeamos que el email no exista para poder actualizar ya que no podria duplicarse
        $sql = "select email from usuarios where email = '$email'";
        $consultar = mysqli_query($conexion, $sql);
        $registros = mysqli_num_rows($consultar);
        if($registros == 0){
            $usuario = $_SESSION['usuario'];
            $sql = "update usuarios set ".
                    "nombre = '$nombre', ".        //se asigno arriba en el operador ternario
                    "apellidos = '$apellido', ".
                    "email = '$email' ".
                    "where id = ".$usuario['id'];   //se asigno en la linea 40
            $guardar = mysqli_query($conexion, $sql);
    
            if($guardar){
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellido;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['completado'] = "tus datos se han actualizado";
            } else {
                echo 'NO guardar';
                die();
                $_SESSION['errores']['general'] = "fallo al actualizar el usuario";
            }
        } else {
            $_SESSION['errores']['general'] = "el usuario ya existe";
        }
    }
}

header("Location: editarDatos.php");
?>