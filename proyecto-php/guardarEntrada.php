<?php
if(isset($_POST)){  //comprobamos si llega alguna informacion desde el formulario
    require_once 'includes/conexion.php';
    $titulo = isset($_POST["titulo"]) ? mysqli_real_escape_string($conexion, $_POST["titulo"]) : false; //mysqli_real_escape_string (limpia los posibles datos que sean peligrosos)
    $descripcion = isset($_POST["descripcion"]) ? mysqli_real_escape_string($conexion, $_POST["descripcion"]) : false;
    $categoria = isset($_POST["categoria"]) ? mysqli_real_escape_string($conexion, (int)$_POST["categoria"]) : false; //(int) hacemos cast del dato para pasarlo a entero

    $usuario = $_SESSION['usuario']['id'];  //obtenemos el id del usuario logueado desde la variable de sesion
    $fecha = date("m/d/y");

     //validacion
     $errores = array();
     if(empty($titulo)){
        $errores["titulo"] = 'el titulo no es valido';
    }
    if(empty($descripcion)){
        $errores["descripcion"] = 'la descripcion no es valida';
    }
    if(empty($categoria) && !is_numeric($categoria)){
        $errores["categoria"] = 'la categoria no es valida';
    }

    if(count($errores) == 0){

        if(isset($_GET["editar"])){ // analiza si viene en modo de edicion o no
            $entrada_id = $_GET["editar"];
            $sql = "update entradas set titulo = '$titulo', descripcion = '$descripcion', categoria_id = $categoria".
                " where id = $entrada_id";
        } else {
            $sql = "insert into entradas values (null, $usuario, $categoria, '$titulo', '$descripcion', '$fecha');";
        }

        // var_dump($sql);
        // die();
        
        $guardar = mysqli_query($conexion, $sql);
        header("Location: index.php");
    } else { //en caso de errores
        if(isset($_GET["editar"])) {    //si es en modo de edicion
            header("Location: editar_entrada.php?id=".$_GET["editar"]);
        } else {    //si es en modo de alta
            $_SESSION["erroresEntrada"] = $errores;
            header("Location: crearEntrada.php");
        }
    }
}
?>