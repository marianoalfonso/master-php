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
                $usuario = new usuariosModel();
                $usuario->setNombre($_POST["nombre"]);
                $usuario->setApellidos($_POST["apellidos"]);
                $usuario->setEmail($_POST["email"]);
                $usuario->setPassword($_POST["password"]);

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
            // redirigimos a la pagina de registro
            header("Location: ".base_url."usuarios/registro");
        }
    }

?>