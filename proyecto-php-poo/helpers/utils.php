<?php

    class Utils {

        // si existe la sesion, la borra
        public static function deleteSession($nombre_sesion) {
            if(isset($_SESSION[$nombre_sesion])) {
                $_SESSION[$nombre_sesion] = null;
                unset($_SESSION[$nombre_sesion]);
            }
            return $nombre_sesion;
        }

        // verifica si es admin al chequear si esta la sesion admin
        public static function isAdmin() {
            if(!isset($_SESSION["admin"])) {
                header("Location:".base_url);
            } else {
                return true;
            }
        }

    }

?>