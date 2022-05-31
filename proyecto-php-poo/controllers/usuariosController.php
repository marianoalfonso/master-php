<?php
    // cargamos el modelo
    require_once 'models/usuariosModel.php';

    class usuariosController {

        public function index() {
            echo 'controlador: usuarios<br>accion: index';
        }

        public function registro() {
            // renderizamos la vista registro.php
            require_once 'views/usuarios/registro.php';
        }

        public function save() {
            // obtenemos los datos que nos llegan desde la vista registro.php
            if(isset($_POST)) {
                $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : false;
                // $nombre = $_POST["nombre"] ?? false;
                $apellidos = isset($_POST["apellidos"]) ? $_POST["apellidos"] : false;
                $email = isset($_POST["email"]) ? $_POST["email"] : false;
                $password = isset($_POST["password"]) ? $_POST["password"] : false;

                if($nombre && $apellidos && $email && $password) {
                    $usuario = new usuariosModel();
                    $usuario->setNombre($nombre);
                    $usuario->setApellidos($apellidos);
                    $usuario->setEmail($email);
                    $usuario->setPassword($password);

                    $save = $usuario->save();
                    if($save) {
                        // creamos una sesion para mostrarla luego
                        $_SESSION["register"] = "complete";
                    } else {
                        $_SESSION["register"] = "failed";
                    } 
                } else {
                    // si no llega nada en el post
                    $_SESSION["register"] = "failed";
                }
            } else {
            // si el POST no esta seteado
            $_SESSION["register"] = "failed";
        }
            // redirigimos a la pagina de registro
            header("Location: ".base_url."usuarios/registro");
        }

        public function login() {
            if(isset($_POST)) {
                $usuario = new usuariosModel();
                // seteamos los valores de email y password con los metodos setEmail y setPassword
                $usuario->setEmail($_POST["email"]);
                $usuario->setPassword($_POST["password"]);
                $identity = $usuario->login();

                if($identity && is_object($identity)) {
                    $_SESSION["identity"] = $identity;
                    if($identity->rol == "admin") {
                        $_SESSION["admin"] = true;
                    }
                } else {
                    $_SESSION["error_login"] = "identificacion fallida";
                }
            }
            header("Location: ".base_url);
        }

        public function logout() {
            if(isset($_SESSION["identity"])) {
                unset($_SESSION["identity"]);
            }
            if(isset($_SESSION["admin"])) {
                unset($_SESSION["admin"]);
            }
            header("Location: ".base_url);
        }
    }

?>