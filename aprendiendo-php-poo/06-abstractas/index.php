<!-- una clase abstracta no permite que se instancien objetos a partir de ella
solamente puede usarse para ser heredada por otra clase -->
<?php

    abstract class Ordenador {

        // una propiedad no puede ser abstracta
        public $encendido;

        //para definir un metodo como abstracto, no debe tener funcionalidad, solo debe estar definido
        //este metodo debe volver a definirse en la clase que hereda a esta
        abstract public function Encender();

        public function Apagar() {
            $this->encendido = false;
        }


    }


    class pcAsus extends Ordenador {

        public $software;

        public function arrancarSoftware() {
            $this->software = true;
        }

        //volvemos a definir el metodo Encender, igual que se referencia en la clase parent
        //pero esta vez le definimos funcionalidad
        public function Encender() {
            $this->endendido = true;
        }

    }


    $ordenador1 = new pcAsus();
    $ordenador1->arrancarSoftware();
    $ordenador1->Encender();
    $ordenador1->Apagar();
    var_dump($ordenador1);
 
?>