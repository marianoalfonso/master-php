<?php

namespace Clases2;
class Entrada {
    public $titulo;
    public $fecha;

    public function __construct($titulo, $fecha) {
        $this->titulo = $titulo;
        $this->fecha = $fecha;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getFecha() {
        return $this->fecha;
    }
    public function __destroy() {;}

}