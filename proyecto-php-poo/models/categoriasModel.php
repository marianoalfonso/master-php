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
            $this->nombre = $this->db->real_escape_string($nombre);
        }

        public function getAll() {
            $sql = "select id,nombre from categorias order by id desc;";
            $categorias = $this->db->query($sql);
            return $categorias;
        }

        public function save() {
            $sql = "insert into categorias values (null, '{$this->getNombre()}');";
            $save = $this->db->query($sql);
            $result = false;
            if($result) {
                $result = true;
            }
            return $result;
        }

    }

?>