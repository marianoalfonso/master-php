<?php
    require_once 'modeloBase.php';

// hereda los metodos del modeloBase (ej: conseguirTodos)
    class Nota extends modeloBase {

        private $nombre;
        private $contenido;

        public function __construct() {
            // heredamos el constructor de la base modelBase
            // donde esta la conexion a la base de datos
            parent::__construct();
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getContenido() {
            return $this->contenido;
        }

        public function setContenido($contenido) {
            $this->contenido = $contenido;
        }

}