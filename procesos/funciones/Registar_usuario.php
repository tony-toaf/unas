
<?php 
session_start();

require '../Conexion.php';
if (session_status() != PHP_SESSION_NONE) {
    echo "No tienes permisos";

}

 ?>




