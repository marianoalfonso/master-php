<?php

    class Categoria {
        
        private $id;
        private $nombre;
        private $db;

        public function __construct() {
            $this->db = Database::connect();
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getAll() {
            $sql = "select id,nombre from categorias";
            $categorias = $this->db->query($sql);
            return $categorias;
        }

    }

?>