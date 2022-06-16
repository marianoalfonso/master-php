<?php

    class Producto {
        private $id;
        private $categoria_id;
        private $nombre;
        private $descripcion;
        private $precio;
        private $stock;
        private $oferta;
        private $fecha;
        private $imagen;
        private $db;

        public function __construct() {
            $this->db = Database::connect();
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getCategoria_id()
        {
            return $this->categoria_id;
        }

        public function setCategoria_id($categoria_id)
        {
            $this->categoria_id = $categoria_id;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $this->db->real_escape_string($nombre);
        }

        public function getDescripcion()
        {
            return $this->descripcion;
        }
 
        public function setDescripcion($descripcion)
        {
            $this->descripcion = $this->db->real_escape_string($descripcion);
        }
        
        public function getPrecio()
        {
            return $this->precio;
        }

        public function setPrecio($precio)
        {
            $this->precio = $this->db->real_escape_string($precio);
        }

        public function getStock()
        {
            return $this->stock;
        }

        public function setStock($stock)
        {
            $this->stock = $this->db->real_escape_string($stock);
        }

        public function getOferta()
        {
            return $this->oferta;
        }

        public function setOferta($oferta)
        {
            $this->oferta = $this->db->real_escape_string($oferta);
        }

        public function getFecha()
        {
            return $this->fecha;
        }

        public function setFecha($fecha)
        {
            $this->fecha = $fecha;
        }

        public function getImagen()
        {
            return $this->imagen;
        }

        public function setImagen($imagen)
        {
            $this->imagen = $imagen;
        }

        public function getAll() {
            $sql = "select * from productos order by id desc";
            $productos = $this->db->query($sql);
            return $productos;
        }

        public function getOne() {
            $sql = "select * from productos where id = {$this->getId()}";
            $producto = $this->db->query($sql);
            return $producto->fetch_object();
        }

        public function save() {
            $sql = "insert into productos values (null,'{$this->getCategoria_id()}','{$this->getNombre()}','{$this->getDescripcion()}',{$this->getPrecio()},{$this->getStock()},null,curdate(),'{$this->getImagen()}');";
            $save = $this->db->query($sql);
            $result = false;
            if($save) {
                $result = true;
            }
            return $result;
        }

        public function delete() {
            $sql = "delete from productos where id = {$this->id}";
            $save = $this->db->query($sql);
            $result = false;
            if($save){
                $result = true;
            }
            return $result;
        }
    }

?>