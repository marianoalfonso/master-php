<?php
//iniciamos la sesion y la conexion con la DB
require_once 'includes/conexion.php';


if(isset($_POST)){
         //borramos errores antiguos
        if(isset($_SESSION['error_login'])) {
            unset($_SESSION['error_login']);
        }
        
        //tomamos los datos del formulario
        $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion,$_POST['email']) : false;
        $password = isset($_POST['password']) ? mysqli_real_escape_string($conexion,$_POST['password']) : false;

        //consulta para comprobar las credenciales del usuario
        $sql = "select * from usuarios where email = '$email'";
        $login = mysqli_query($conexion, $sql);

        if($login && mysqli_num_rows($login) == 1) {
            $usuario = mysqli_fetch_assoc($login);  //genera un array asociativo con el resultado de la consulta almacenado en $login
                                                    // array (size=6)
                                                    //     'id' => string '4' (length=1)
                                                    //     'nombre' => string 'Mariano' (length=7)
                                                    //     'apellidos' => string 'Alfonso' (length=7)
                                                    //     'email' => string 'marianoalfonso@gmail.com' (length=24)
                                                    //     'password' => string '$2y$04$8Pdit6IDcFMtICUoyIjYK.f.rowVVZOp5buf0iLkBbleMRbTmC78q' (length=60)
                                                    //     'fecha' => string '2022-03-11' (length=10)

            //comprobamos el password
            $comprobacion = password_verify($password, $usuario['password']);
            if($comprobacion) { //si coincide (=true)
                $_SESSION['usuario'] = $usuario;
                if(isset($_SESSION['error_login'])) {   //si ya esta creada la sesion $_SESSION['error_login'], la eliminamos
                    unset($_SESSION['error_login']);
                }
            } else {
                $_SESSION['error_login'] = "la password no coincide";
            }
        } else {
            //mensaje de error por no existir el usuario con el mail ingresado
            $_SESSION['error_login'] = "no existe un usuario asociado a esa cuenta";
        }
}

Header("Location: index.php");



//utilizar una sesion para guardar los datos del usuario logueado

//si algo falla enviar una sesion con el fallo

//redirigir al index.php