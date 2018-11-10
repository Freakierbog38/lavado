<?php

class Conexion{

    public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=lavado", "root", "edwin123");
        return $link;
    }

}