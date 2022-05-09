<!-- object oriented programming
constructores
se utiliza para darle valores a las propiedades de la clase
es el primer metodo en ejecutarse automaticamente al crear cada objeto
no devuelve datos, solo setea informacion -->

<?php

    //definimos una clase
    class Coche{
        //atributos (antes variables)
        public $color;  //podemos acceder desde cualquier lugar
        protected $marca;   //accesibles desde la clase que lso define y las clases que hereden de esta clase
        private $modelo;    //solo se accede desde la clase en la cual se definen
        public $velocidad;
        public $caballaje;
        public $plazas;

        public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$plazas){
            $this->color = $color;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->velocidad = $velocidad;
            $this->caballaje = $caballaje;
            $this->plazas = $plazas;
        }

        //metodos (antes funciones)
        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
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

        //metodo para imprimir la informacion del objeto
        // podemos indicar el tipo de objeto que vamos a recibir
        public function mostrarInformacion(Coche $objeto){  //recibe solamente un objeto del tipo Coche
            if(is_object($objeto)){
                $informacion = "<h1>informacion del coche</h1>";
                $informacion .= "color: ".$objeto->color."<br>";
                $informacion .= "marca: ".$objeto->marca."<br>";
                $informacion .= "modelo: ".$objeto->modelo."<br>";
                $informacion .= "velocidad: ".$objeto->velocidad."<br>";
                $informacion .= "caballaje: ".$objeto->caballaje."<br>";
                $informacion .= "plazas: ".$objeto->plazas."<br>";
            } else {
                $informacion = "tu dato es este: ".$objeto;
            }
            return $informacion;
        }

    }