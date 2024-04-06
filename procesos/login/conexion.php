<?php
try {
    $base = new PDO("mysql:host=localhost; dbname=gestor", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT ID, Nombre, Contraseña, RolID FROM usuarios WHERE Nombre = :login AND Contraseña = :password";

    $resultado = $base->prepare($sql);

    $login = htmlentities(addslashes($_POST["usuario"]));
    $password = htmlentities(addslashes($_POST["password"]));

    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);

    $resultado->execute();

    $numero_registro = $resultado->rowCount();

    if ($numero_registro != 0) {
        session_start();
        $row = $resultado->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id_usuario'] = $row['ID'];
        $_SESSION['usuario'] = $row['Nombre'];
        $_SESSION['id_rol'] = $row['RolID'];

        header("Location: verificando_usuario.php");
    } else {
        header("Location: ../funciones/Sesion_no_iniciada.php");
    }

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>
