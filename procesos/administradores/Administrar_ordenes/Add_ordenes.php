<?php
//archivo para agregar Ordenes
require_once '../../Conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener los datos del formulario
    $Fecha = $_POST['Fecha'];
    $Nombre = $_POST['Nombre'];
    $Identidad = $_POST['Identidad'];
    $Delito = $_POST['Delito'];
    $Victima = $_POST['Victima'];
    $Estado = 1; //el estado siempre es pendiente
    
    try {
        // insertando los datos
        $consulta = $base->prepare("INSERT INTO OrdenesCapturas (FechaEmision, Nombre, Identidad, Delito, Victima, Estado) VALUES (?, ?, ?, ?, ?, ?)");
        $consulta->bindParam(1, $Fecha);
        $consulta->bindParam(2, $Nombre);
        $consulta->bindParam(3, $Identidad);
        $consulta->bindParam(4, $Delito);
        $consulta->bindParam(5, $Victima);
        $consulta->bindParam(6, $Estado);
        $consulta->execute();


        echo "Orden agregada correctamente.";
        
        
    } catch (PDOException $e) {
        // Manejar errores de PDO (por ejemplo, duplicados, restricciones de clave externa, etc.)
        echo "Error al agregar Orden: " . $e->getMessage();
    }
} else {
    echo "No se envió el Agregaron los Datos.";
    exit();

}
?>

