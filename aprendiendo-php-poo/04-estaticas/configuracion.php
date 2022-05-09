<?php

    // una clase estatica permite acceder a sus propiedades y metodos directamente, sin instanciar objetos
    class Configuracion {

        public static $color;
        public static $newsletter;
        public static $entorno;

        public static function getColor() {
            return self::$color;    //se usa self cuando una propiedad es estatica (es equivalente al $this)
        }

        public static function setColor($color) {
            self::$color = $color;
        }

        public static function getNewsletter() {
            return self::$newsletter;
        }

        public static function setNewsletter($newsletter) {
            self::$newsletter = $newsletter;
        }

        public static function getEntorno() {
            return self::$entorno;
        }

        public static function setEntorno($entorno) {
            self::$entorno = $entorno;
        }

    }






?>