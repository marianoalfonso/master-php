<?php
    require_once 'includes/conexion.php';


// session_start();

// verificamos si existe la variable de sesion USUARIO
$entrada_id = $_GET['id']; //obtenemos el id de la entrada
$usuario_id = $_SESSION['usuario']['id'];   //obtenemos el id del usuario
if(isset($_SESSION["usuario"]) && isset($_GET['id'])){ //si existe la variable de sesion usuario y el id de la entrada
    $sql = "delete from entradas where usuario_id = $usuario_id".
        " and id = $entrada_id";
    $borrado = mysqli_query($conexion, $sql);

    if($borrado){
        header("Location: index.php");
    } else {
        echo mysqli_error($conexion);
    }
}