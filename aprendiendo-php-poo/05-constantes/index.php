<?php

class Usuario {

    const URL = "http://localhost";
    public $email;
    public $password;

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

$usuario1 = new Usuario();
echo $usuario1::URL."<br>"; //de esta manera con dos puntos accedemos a la constante de la clase, no se usa $this (las constantes son estaticas)
var_dump($usuario1);
