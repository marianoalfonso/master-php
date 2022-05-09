<?php
if(isset($_POST)) {
    //referenciamos la conexion para poder guardar el usuario en la DB
    require_once 'includes/conexion.php';   
       //iniciamos la sesion
    if(!isset($_SESSION)) {
        session_start();
    }

    //levantamos los valores del formulario
    if(isset($_POST['nombre'])) {
        $nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
    } else {
        $nombre = false;
    }
    //lo mismo con un operador ternario
    $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($conexion,$_POST['apellido']) : false; //mysql_real_escape_string: enterpreta el parametro como string, por ej. si le pasamos comilla lo interpreta como string
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion,$_POST['email']) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($conexion,$_POST['password']) : false;

    //definimos un array de errores
    $errores = array();

    //validamos los datos antes de guardarlos en la DB
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) { //!preg_match: si no se cumple la expresion regular, en este caso --> sin no hay un numero
        $nombre_valido = true;
    } else {
        $nombre_valido = false;
        $errores["nombre"] = 'el nombre no es valido';
    }
    if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)) { 
        $apellido_valido = true;
    } else {
        $apellido_valido = false;
        $errores["apellido"] = 'el apellido no es valido';
    }
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        $email_valido = true;
    } else {
        $email_valido = false;
        $errores["email"] = 'el email no es valido';
    }
    if(!empty($password)) { 
        $password_valido = true;
    } else {
        $password_valido = false;
        $errores["password"] = 'el password no es valido';
    }

    $guardar_usuario = false;
    //buscamos si hubo error
    if(count($errores) == 0) {
        //insertamos en la base de datos
        $guardar_usuario = true;

        //ciframos el password
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]); //PASSWORD_BCRYPT (tipo decifrado), ['cost'=>4] (array para indicar las pasadas del cifrado,4 en este caso)

        //insertamos el usuario en la db
        $fecha = date('Y-m-d');
        //$sql = "insert into usuarios values (null, '$nombre', '$apellido', '$email', '$password', '$fecha');";
        $guardar = mysqli_query($conexion, "insert into usuarios values (null, '$nombre', '$apellido', '$email', '$password_segura', '$fecha');");

        if($guardar) {
            $_SESSION['completado'] = "el registro se ha completado";   //variable de sesion
        } else {
            $_SESSION['errores']['general'] = "HOLA, fallo al guardar el usuario";    //agregamos el indice 'general' al array de errores
        }

 } else {
    $_SESSION['errores'] = $errores;    //creamos una variable de sesion llamada 'errores', y le pasamos el array de errores
}
}

header('Location: index.php');  //redireccion a la pagina index.php