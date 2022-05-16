<?php

    class Usuario{
        public $nombre;
        public $email;

        public function __construct($nombre, $email){
            $this->nombre = $nombre;
            $this->email = $email;
            echo 'instancia del objeto creada<br>';
        }

        public function __toString(){
            return "testeando el metodo toString<br>";
        }


        // A destructor is called when the object is destructed or the script is stopped or exited.
        // If you create a __destruct() function, PHP will automatically call this function at the end of the script.
        public function __destruct(){
            echo 'instancia del objeto destruida<br>';
        }

        public function getNombre(){
            return $this->nombre;
        }



    }

    $usuario1 = new Usuario("Mariano","gmail");
    echo $usuario1->getNombre(),"<br>";
    // para poder imprimir el objeto, debe estar definida la funcion __toString
    {echo $usuario1;

?>