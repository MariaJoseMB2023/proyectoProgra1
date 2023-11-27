<!--aquí vamos a agregar todas las librerías que vamos a ír ocupando de css, bootstrap, fontawesome 
isset nos ayuda para decirnos si existe o se ha encontrado una variable ya sea por metodo POST o GET 
en la condicional @session_start vamos a tener todas las seciones que esten creadas cuando detecte que existe la variable "of"
destruirlas para que ya no permita el acceso -->

<?php
if (isset($_GET["off"])) {
    @session_start();
    $_SESSION = array();     //Le estamos diciendo que todas las sesiones que se creen se van a guardar en el array
    session_destroy();
} else {
    @session_start();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($_SESSION["login_ok"])) : ?> <!--Esta estructura la usaremos cuando vayamos a incrustrar php e incrustarlo en html -->
        <title>SRD</title>
    <?php else : ?>
        <title>Login</title>
    <?php endif ?>
    <!--CSS -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/">

    <!--JS -->
    <script src="./public/js/jquery-3.5.1.slim.min.js"></script>
    <script src="./public/js/jquery-1.9.1.min.js"></script>
    <script src="./public/js/funciones.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>

    <!--Fontawesome -->
    <script src="./public/fontawesome/fontawesome.js"></script>

    <!--Alertify -->
    <link rel="stylesheet" href="./public/alertify/alertify.min.css">
    <script src="./public/alertify/alertify.min.js"></script>


</head>
<!--este está en funciones.js se invoca en $("data").html(); especificamos en el .html() -->

<body id="data"> <!--como se trabajará con js ponemos un id en el body-->
    <?php
    if (isset($_SESSION['login_ok'])) {
        include './views/modulos/menus/navbar.php';
    }

    ?>
    <div id="base-principal">
        <?php
        if (isset($_SESSION["login_ok"])) {
            include "./views/principal.php";
        } else {
            include "./views/login.php";
        };

        ?>
    </div>

</body>

</html>
<script>
    /*Btnsalir */
    $(".BtnSalir").click(function() {
        alertify.confirm("Cerrar Sesion", "Seguro/a de cerrar la sesion", function() {
            $("#data").load("./index.php?off=1");
            setTimeout(function() {
                window.location.href = "index.php";
            }, 1000);
        }, function() {
            alertify.error("<b style='color:white;'>Cierre cancelado...</b>");
        });
    });
</script>