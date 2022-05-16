<!-- contrato en el cual definimos que metodos y en que orden van a estar en una clase -->

<?php

    interface Ordenador {
        public function Encender();
        public function Apagar();
        public function Reiniciar();
        public function Desfragmentar();
        public function DetectarUSB();
    }


    class iMac implements Ordenador {
        // al estar private, puede accederse solo a travez del metodo getModelo
        private $modelo;

        function getModelo() {
            return $this->modelo;
        }

        function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        // al implementar la interface Ordenador, debemos cumplir con el contrato
        // y definir los metodos de la interface
        public function Encender(){;}
        public function Apagar(){;}
        public function Reiniciar(){;}
        public function Desfragmentar(){;}
        public function DetectarUSB(){;}

    }

    $maquintosh = new iMac();
    $maquintosh->setModelo("macbook pro");
    // var_dump($maquintosh);
    
    echo $maquintosh->getModelo();
?>

