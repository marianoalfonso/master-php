<!-- herencia: posibilidad de heredar atributos y metodos entre clases -->
<?php

class Persona {

    public $nombre;
    public $apellido;
    public $altura;
    public $edad;

     public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }
     
    public function hablar(){
        return "estoy hablando";
    }

    public function caminar(){
        return "estoy caminando";
    }
}

class Informatico extends Persona { //indicamos la herencia de la clase Persona

    public $lenguajes;
    public $experiencia;

    public function __construct() {
        $this->lenguajes = "html, php, javascript, vb.net, c#.net node.js, react.js, next.js";
        $this->experiencia = 18;
    }

    public function programar(){
        return "estoy programando";
    }

    public function repararOrdenador(){
        return "estoy reparando ordenadores";
    }

    public function hacerOfimatica(){
        return "estoy haciendo ofimatica";
    }
}

class tecnicoRedes extends Informatico {
    
    public $auditarRedes;
    public $experienciaRedes;

    public function __construct() {
        parent::__construct();  //fuerza que herede el metodo constructor de la clase padre (en este caso Informatico)
        $this->auditarRedes = 'experto';
        $this->experienciaRedes = 10;
    }
}

?>