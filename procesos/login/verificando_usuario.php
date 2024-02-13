<?php
session_start();

if (isset($_SESSION['id_usuario'])) {
    try {
        $base = new PDO("mysql:host=localhost; dbname=gestor", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id_usuario = $_SESSION['id_usuario'];

        $nombre_usuario = $_SESSION['usuario'];


        $sql = "SELECT RolID FROM usuarios WHERE ID = :id";
        $resultado = $base->prepare($sql);
        $resultado->bindValue(":id", $id_usuario);
        $resultado->execute();

        $row = $resultado->fetch(PDO::FETCH_ASSOC);
         $rol = $row['RolID'];
        if ($row!=false) {

            if ($rol == 1) {
                //usuario perito
                header("Location: ../../vistas/a_peritos.php");
                

            }elseif ($rol == 2) {
                //usuario investigador
                header("Location: ../../vistas/a_investigacion.php");  

            }elseif ($rol == 3) {
                //rol adminitrativo
                header("Location: ../../vistas/a_administracion.php");
            }elseif ($rol == 4 ) {
                header("Location: ../../vistas/home.php");
            }
            else {
                echo "Rol desconocido.";
            }
        } else {
            echo "No se encontró información para el usuario con ID: $id_usuario";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    echo "ID de usuario no disponible en la sesión.";
}
?>
