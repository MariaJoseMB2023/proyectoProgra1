
<?php
require "./controllers/C_index.php";

$mvc = new Index();             /*Siempre que haremos uso de alguna clase haremos uso de la palabra new, Index sería el objeto a utilizar*/
$mvc->base();                 /*Creamos un metodo llamado base*/


//echo password_hash("1234",PASSWORD_DEFAULT);
?>