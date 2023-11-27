<?php
    class Procesos{
        public function DataUser($user){
            $row = NULL;
            $modelo = new conexionBD();
            $conexion =$modelo -> get_conexion();
            $sql = "SELECT * FROM usuarios WHERE usuario=:usuario";
            $stm = $conexion->prepare($sql);
            $stm->bindParam(":usuario","$user");
            $stm->execute();

            while($result = $stm->fetch()){
                $row[] = $result;
            }
            return $row;
        }
    }

?>