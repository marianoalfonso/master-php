<?php

    class productosController {
        public function index() {
            // renderizamos la vista destacados.php
            require_once 'views/productos/destacadosView.php';
        }

        public function gestion() {
            Utils::isAdmin(); //si no es administrador rutea al index
            require_once 'models/productosModel.php'; //instanciamos el modelo
            $producto = new Producto(); //creamos la instancia
            $productos = $producto->getAll();   //ejecutamos el metodo
            require_once 'views/productos/gestionView.php'; //requerimos la vista, la cual ya va a tener acceso al objeto $producto/$productos
        }

        public function crear() {
            Utils::isAdmin(); //si no es administrador rutea al index
            require_once 'views/productos/crearProductoView.php';
        }

        // guarda los datos recibidos de la vista crearProductoView.php
        public function save() {
            require_once 'models/productosModel.php'; //referenciamos el modelo para poder guardar los datos en la DB
            Utils::isAdmin(); //si no es administrador rutea al index
            if(isset($_POST)) {
                $nombre = $_POST["nombre"] ?? false;    //operador ternario optimizado
                $descripcion = $_POST["descripcion"] ?? false;    //operador ternario optimizado
                $precio = $_POST["precio"] ?? false;    //operador ternario optimizado
                $stock = $_POST["stock"] ?? false;    //operador ternario optimizado
                $categoria = $_POST["categoria"] ?? false;    //operador ternario optimizado
                //$imagen = $_POST["imagen"] ?? false;    //operador ternario optimizado

                if($nombre && $descripcion && $precio && $stock && $categoria) {
                    $producto = new Producto();
                    $producto->setNombre($nombre);
                    $producto->setDescripcion($descripcion);
                    $producto->setPrecio($precio);
                    $producto->setStock($stock);
                    $producto->setCategoria_id($categoria);
                    // guardamos la imagen
                    $file = $_FILES["imagen"];      //imagen es el nombre que le puse en el form donde esta el control
                    $filename = $file["name"];    //nombre del archivo
                    $mimetype = $file["type"];      //tipo de dato (ver en google los mimetypes para ver que hay disponible)
                    // verificamos si el mimetype corresponde a una imagen
                    if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif") {
                        // verificamos que exista el directorio para guardar los archivos
                        if(!is_dir("uploads/images")) {
                            mkdir("uploads/images", 0777, true); //si no existe, lo creo (true para crear directorios recursivos)
                        }
                        // guardamos la imagen
                        move_uploaded_file($file["tmp_name"], "uploads/images/".$filename); //tmp_name llega en el array del archivo a subir
                        $producto->setImagen($filename);
                    }

                    $save = $producto->save();

                    if($save) { //si se grabo correctamente
                        $_SESSION["producto"] = "complete";
                    } else { //si NO se grabo
                        $_SESSION["producto"] = "failed";
                    }
                } else { //si algun dato a guardar es nulo
                    $_SESSION["producto"] = "failed";
                }
            } else {    //si no llega nada por $_POST
                $_SESSION["producto"] = "failed";
            }
            header("Location:".base_url."productos/gestion");
        }

        public function edit() {
            Utils::isAdmin(); //si no es administrador rutea al index
            if(isset($_GET["id"])) {
                require_once 'models/productosModel.php';
                $edit = true;
                $producto = new Producto();
                $producto->setId($_GET["id"]);
                $pro = $producto->getOne(); //se ejecuta la consulta getOne del modelo


                require_once 'views/productos/crearProductoView.php';
            } else {
                header("Location:".base_url."productos/gestion");
            }
        }

        public function erase() {
            require_once 'models/productosModel.php';
            Utils::isAdmin();
            if(isset($_GET["id"])) {
                $producto = new Producto();
                $producto->setId($_GET["id"]);
                $erase = $producto->delete();
                if($erase) {
                    $_SESSION["borrar_producto"] = "erased";
                } else {
                    $_SESSION["borrar_producto"] = "failed";
                }
            } else {
                $_SESSION["borrar_producto"] = "failed";
            }
            header("Location:".base_url."productos/gestion");

        }

    }

?>