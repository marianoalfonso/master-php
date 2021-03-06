<?php

    // requerimos el archivo database.php donde se especifica
    // la conexion con la base de datos
    
    require_once 'config/database.php';

    class ModeloBase {

        public $db;

        public function __construct() {
            // llamamos con :: a una funcion estatica
            $this->db = Database::conectar();
        }
  
        public function conseguirTodos($tabla) {
            $query = $this->db->query("select * from $tabla");
            return $query;
        }
        
    }
