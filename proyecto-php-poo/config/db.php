<?php

class Database {
    public static function connect() {
        $db = new mysqli('localhost','root','','tienda_master');
        // la siguiente consulta es para que devuelva las tildes y ñ
        $db->query("set names 'utf8'");
        return $db;
    }
}