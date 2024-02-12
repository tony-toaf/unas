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

        if ($row) {
            $rol = $row['RolID'];

            if ($rol == 1) {

               
                //usuario administrador
                //echo "usuario que inicio secion ". $nombre_usuario;
                echo "usuario administrador";

            } elseif ($rol == 2) {
                //usuario perito
                header("Location: ../../vistas/a_peritos.php");

            }elseif($rol == 3){
                //usuario investigador
                header("Location: Location: ../../vistas/a_investigacion.php");

            }elseif($rol == 4){
                //admistrativo  
               header("Location: ../../vistas/a_administracion.php");

            }else {
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
