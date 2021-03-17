<?php
    class conexion{
        static function llamar_conexion(){
            $conexion=new PDO("mysql:host=localhost;dbname=practica6","root","");
            $conexion->exec("set names utf8");
            return $conexion;
        }
    }