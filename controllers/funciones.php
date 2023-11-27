<?php
function AccessLogin($user, $passw)
{
    $consultas = new Procesos();
    $data = $consultas->DataUser($user);

    if ($data) {
        foreach ($data as $result) {
            $idusuario = $result['idusuario'];
            $hash = $result['clave'];
            $tipo = $result['tipo'];
            $estado = $result['estado'];
        }

        if ($estado == 1) {
            if (password_verify($passw, $hash)) {
                $_SESSION["idusuario"] = $idusuario;
                $_SESSION["tipo"] = $tipo;
                $_SESSION["login_ok"] = 1;

                echo '<script>
                    $("#data").html
                    ("<div class=\'padre\'><div class=\'hijo\'><img src=\'./public/img/login/load4.gif\'><hr><b>Bienvenido/a....</b></div></div>");
                    setTimeout(function(){window.location.href="index.php";},1000);
                </script>';
            } else {
                echo '<script>
                        var msj = "<b>Error la contrasena no coincide...</b>";
                        alertify.set("notifier","position","top-right");    
                        alert.success(msj);      
                        setTimeout(function(){window.location.href="index.php";},1000);
                    </script>';
            }
        } else {
            echo '<script>
                    var msj = "<b>El usuario no tiene permiso de acceso</b>";
                    alertify.set("notifier","position","top-right");    
                    alert.success(msj);      
                    setTimeout(function(){window.location.href="index.php";},1000);
                </script>';
        }
    } else {
        echo '<script>
                var msj = "<b>El usuario no existe</b>";
                alertify.set("notifier","position","top-right");    
                alert.success(msj);      
                setTimeout(function(){window.location.href="index.php";},1000);
            </script>';
    }
}
?>
