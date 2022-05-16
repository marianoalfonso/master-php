<?php

    class Persona{
        private $nombre;
        private $edad;
        private $ciudad;

    public function __construct($nombre, $edad, $ciudad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    public function __call($name, $arguments){
        return "no existe el metodo <strong>".$name."</strong> invocado";
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getCiudad(){
        return $this->ciudad;
    }

    public function __destruct(){;}



    }


    $persona1 = new Persona("Mariano",49,"Ciudad Autonoma de Buenos Aires");
    echo $persona1->getNombre();

?>