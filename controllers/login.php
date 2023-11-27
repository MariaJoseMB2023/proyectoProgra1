<?php
    @session_start();
    include "./models/conexion.php";
    include "./models/funciones.php";
    include "./controllers/funciones.php";

    if(isset($_POST["user"])){
        $user = $_POST["user"];     //son el valor que tienen los names en login.php
        $passw = $_POST["clave"];
        AccessLogin($user, $passw);
    } else{
        header("Location: ./index.php");
    }
?>