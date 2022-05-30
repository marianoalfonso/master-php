<?php

    class usuariosModel {
        private $id;
        private $nombre;
        private $apellidos;
        private $email;
        private $password;
        private $imagen;
        private $db;
        
        public function __construct() {
            $this->db = Database::connect(); // con :: referenciamos una funcion estatica
        }

        function getId() {
            return $this->id;
        }

        function setId($id) {
            $this->id = $id;
        }

        function getNombre() {
            return $this->nombre;         
        }

        function setNombre($nombre) {
            //descartamos simbolos y cosas raras que vengan del formulario
            $this->nombre = $this->db->real_escape_string($nombre);
        }

        function getApellidos() {
            return $this->apellidos;
        }

        function setApellidos($apellidos) {
            //descartamos simbolos y cosas raras que vengan del formulario
            $this->apellidos = $this->db->real_escape_string($apellidos);
        }

        function getEmail() {
            return $this->email;
        }

        function setEmail($email) {
            //descartamos simbolos y cosas raras que vengan del formulario
            $this->email = $this->db->real_escape_string($email);
        }

        function getPassword() {
            // encriptamos la contraseña con el metodo PASSWORD_BCRYPT en 4 pasos
            return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
        }

        function setPassword($password) {
            $this->password = $password;
        }

        function getImagen() {
            return $this->imagen;
        }

        function setImage($imagen) {
            $this->imagen = $imagen;
        }

        // creamos el metodo save
        public function save() {
            $sql = "insert into usuarios values (null, '{$this->getNombre()}','{$this->getApellidos()}','{$this->getEmail()}','{$this->getPassword()}','user',null)";
            $save = $this->db->query($sql);
            $result = false;
            if($save) {
                $result = true;
            }
            return $result;
        }

        // el parametro $password debe venir cifrado
        public function login() {   //en vez de recibir email y password por parametro, los obtenemos
            $result = false;        //con los metodos getEmail y getPassword
            $email = $this->email;
            $password = $this->password;

            // comprobamos si existe el usuario
            $sql="select * from usuarios where email = '$email'";
            $login = $this->db->query($sql);
            // si el login devolvio resultados y si las filas son 1
            if($login && $login->num_rows == 1) {
                $usuario = $login->fetch_object();
                // verificamos password

                // password_verify — Comprueba que la contraseña coincida con un hash
                $verify = password_verify($password, $usuario->password);
                $result = false;
                if($verify) {
                    // si esta correcto devolvemos el objeto del usuario
                    $result = $usuario;
                }
                return $result;
            }


        }

    }