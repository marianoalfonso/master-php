<!-- object oriented programming -->
<?php

    //definimos una clase
    class Coche{
        //atributos (antes variables)
        public $color = "rojo";
        public $marca = "Ferrari";
        public $modelo = "Aventador";
        public $velocidad = 300;
        public $caballaje = 500;
        public $plazas = 2;

        //metodos (antes funciones)
        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
        }

        public function acelerar(){
            $this->velocidad++; 
        }

        public function frenar(){
            $this->velocidad--; 
        }

        public function getVelocidad(){
            return $this->velocidad;
        }

    }

    //cremaos un objeto o instanciamos la clase
    $coche = new Coche();
    var_dump($coche);

    //usamos los metodos
    echo "el valocidad actual del coche es: ".$coche->getVelocidad()." km/h<br>";

    $coche->setColor("Amarillo");
    echo "el color del coche es: ".$coche->getColor()."<br>";

    $coche->acelerar();
    echo "hemos acelarado, el valocidad actual del coche es: ".$coche->getVelocidad()." km/h<br>";
    $coche->acelerar();
    echo "hemos acelarado, el valocidad actual del coche es: ".$coche->getVelocidad()." km/h<br>";
    $coche->acelerar();
    echo "hemos acelarado, el valocidad actual del coche es: ".$coche->getVelocidad()." km/h<br>";
    $coche->acelerar();
    echo "hemos acelarado, el valocidad actual del coche es: ".$coche->getVelocidad()." km/h<br>";
    $coche->acelerar();
    echo "hemos acelarado, el valocidad actual del coche es: ".$coche->getVelocidad()." km/h<br>";
    $coche->acelerar();
    echo "hemos acelarado, el valocidad actual del coche es: ".$coche->getVelocidad()." km/h<br>";

    $coche->frenar();
    echo "hemos frenado, el valocidad actual del coche es: ".$coche->getVelocidad()." km/h<br>";  

?>