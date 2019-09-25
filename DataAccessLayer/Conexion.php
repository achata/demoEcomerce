<?php 
    class Conexion{

        public static function openConnect(){
            $conexion = new mysqli('localhost','root','','test');
            if ($conexion->connect_errno) {
                printf("Connect failed: %s\n", $conexion->connect_error);
                exit();
            }
            return $conexion;
        }
    }
?>