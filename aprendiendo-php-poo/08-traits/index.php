<?php

    // los traits permiten definir metodos para compartirlos entre clases de diferente tipo
    trait Utilidades {
        public function mostrarNombre() {
            echo "<h1>el nombre es: ".$this->nombre."</h1>";
        }
    }

    class Coche {
        public $nombre;
        public $marca;

        public function __construct ($nombre, $marca){
            $this->nombre = $nombre;
            $this->marca = $marca;
        }

        use Utilidades;
    }

    class Persona {
        public $nombre;
        public $apellidos;

        public function __construct($nombre, $apellidos){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
        }

        use Utilidades;
    }

    class VideoJuego {
        public $nombre;
        public $anio;

        public function __construct($nombre, $anio){
            $this->nombre = $nombre;
            $this->anio = $anio;
        }

        use Utilidades;
    }

    $coche1 = new Coche('Testarossa','Ferrari');
    $persona1 = new Persona('Martina','Freire');
    $videojuego1 = new VideoJuego('call of duty',2008);

    
    var_dump($coche1);
    var_dump($persona1);
    var_dump($videojuego1);

    $coche1->mostrarNombre();
    $persona1->mostrarNombre();
    $videojuego1->mostrarNombre();

    $videojuego1->nombre = "gta V";
    $videojuego1->mostrarNombre();

?>