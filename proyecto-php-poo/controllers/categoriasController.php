<?php
    // invocamos el modelo
    require_once 'models/categoriasModel.php';

    class categoriasController {
        public function index() {
            // si no es admin redirige
            Utils::isAdmin();
            // creamos el objeto
            $categoria = new categoria();
            // ejecutamos el metodo del objeto
            $categorias = $categoria->getAll();
            // al haberla asignado a $categorias, ya esta disponible en la vista 'views/categorias/index.php'
            require_once 'views/categorias/index.php';

        }

        public function crear() {
            // si no es admin redirige
            Utils::isAdmin();
            require_once "views/categorias/crearCategoriaView.php";
        }
    
        public function save() {
            // si no es admin redirige
            Utils::isAdmin();
            if(isset($_POST)) {
                $categoria = new Categoria();
                $categoria->setNombre($_POST["nombre"]);
                $categoria->save();
            }
            header("Location:".base_url."categorias/index");
        }

    }

?>