<?php 
    class conexionBD{
        public function get_conexion(){
            $user = "root";         //el usuario con el que accedemos a la base de datos o php my admin
            $pass = "Admin2022";
            $host = "localhost";
            $db = "srd_ujmd";

            $conexion = new PDO(
                "mysql:host=$host;dbname=$db;",
                $user,
                $pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND=> "set names utf8")
            );

            return $conexion; 

        }

        


    }

?>