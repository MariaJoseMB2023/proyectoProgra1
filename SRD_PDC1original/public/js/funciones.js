$(document).ready(function() { //dentro de él vamos a crear diferentes funciones o metodos, es como para crear la plantilla en js
    /* FORM Login Lo primero que se hara es que primero detecte que elemento ha sido seleccionado algún botón o algún enlace para realizar el sig proceso*/
    $("#form-login").on("submit", function() {
        var formData = new FormData(document.getElementById("#form-login")) //Cuando vayamos a llamar elementos a traves del Id lo haremos con # cuando
        formData.append("dato", "valor") //sea llamado a través de clase lo haremos con un punto*/
        //En este caso dato representa nombre de elemento en este caso el 
        //nombre sera user y clave que aparecen en el name del formulario en login.php 
        $("#data").html('<div class="padre"><div class="hijo"><img src="./public/img/login/load4.gif" alt=""><hr><b>Un momento, por favor....</b></div></div>');

        $.ajax({
            url: "../controllers/login.php",
            type: "post",
            dataType: "html",  
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
        }).success(function(result) { //result será la variable que va a alojar todo dentro del $.ajax
            $("#data").fadeIn(1000).html(result); //fadeIn será para determinar cuánto tiempo tardará para mostrar las img y envíar la información y que se enviará en html
        });

    }) /*Esto esta en login.php en el form*/

    /*Btnsalir */
    $(".BtnSalir").click(function(){
        alertify.confirm("Cerrar Sesion","Seguro/a de cerrar la sesion",function(){
            $("#data").load("./index.php?off=1");
            setTimeout(function(){ window.location.href="index.php"; },1000);
        }, function(){
            alertify.error("<b style='color:white;'>Cierre cancelado...</b>");
        });
    });

});