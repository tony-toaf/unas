<?php
require_once 'Conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST['USERNAME'];
    $pass = $_POST['ADDPASSWORD'];
    $rolid = $_POST['Rolid'];

    try {
        // Verificar si el usuario ya existe
        $consulta_verificar = $base->prepare("SELECT COUNT(*) FROM usuarios WHERE Nombre = ?");
        $consulta_verificar->bindParam(1, $usuario);
        $consulta_verificar->execute();
        $resultado = $consulta_verificar->fetch(PDO::FETCH_COLUMN);

        if ($resultado > 0) {
            echo "El nombre de usuario ya existe";
        } else {
            // insertando los datos
            $consulta = $base->prepare("INSERT INTO usuarios (Nombre, Contraseña, RolID) VALUES (?, ?, ?)");
            $consulta->bindParam(1, $usuario);
            $consulta->bindParam(2, $pass);
            $consulta->bindParam(3, $rolid);
            $consulta->execute();

            echo "Usuario agregado correctamente.";
        }
        
    } catch (PDOException $e) {
        // Manejar errores de PDO (por ejemplo, duplicados, restricciones de clave externa, etc.)
        echo "Error al agregar usuario: " . $e->getMessage();
    }
} else {
    echo "No se envió el formulario.";
      exit();


      //pendiente configurar para este archivo la vista al insertar los datos y los errores


}
?>

