<?php
    // invocamos el modelo
    require_once 'models/categoriasModel.php';

    class categoriasController {
        public function index() {
            // creamos el objeto
            $categoria = new categoria();
            // ejecutamos el metodo del objeto
            $categorias = $categoria->getAll();
            // al haberla asignado a $categorias, ya esta disponible en la vista 'views/categorias/index.php'
            require_once 'views/categorias/index.php';

        }

    
    


    }

?>