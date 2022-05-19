<?php
    
    require_once 'modeloBase.php';

    // hereda los metodos del modeloBase (ej: conseguirTodos)
    class Usuario extends modeloBase {

        private $nombre;
        private $apellidos;
        private $email;
        private $password;

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

        public function getApellidos() {
            return $this->apellidos;
        }
        
        public function setApellidos($apellidos) {
            $this->apellidos = $apellidos;
        }

        public function getEmail() {
            return $this->email;
        } 

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getPassword() {
            return $this->password;
        } 

        public function setPassword($password) {
            $this->password = $password;
        }

}