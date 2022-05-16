<?php

namespace Clases2;
class Usuario {
    public $nombre;
    public $email;

    public function __construct($nombre, $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function __destroy() {;}

}