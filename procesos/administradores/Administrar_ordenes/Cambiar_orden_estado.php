<?php
// Archivo para cambiar estado de orden
require_once '../../Conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener los datos del formulario
    $Dato = strtolower($_POST['Dato']); // Convertir a minúsculas
    $Dato = str_replace("-", "", $Dato); // Eliminar guiones
    $Estado = $_POST['Estado'];
    
    try {
        // Actualizando los datos
        $consulta = $base->prepare("UPDATE OrdenesCapturas SET Estado = ? WHERE LOWER(Nombre) = ? OR REPLACE(Identidad, '-', '') = ?");
        $consulta->bindParam(1, $Estado);
        $consulta->bindParam(2, $Dato); 
        $consulta->bindParam(3, $Dato); 
        
        $consulta->execute();

        if ($consulta->rowCount() > 0) {
            echo "Orden actualizada correctamente.";
        } else {
            echo "No se encontró ninguna orden para actualizar con el nombre o identidad proporcionados.";
        }
        
    } catch (PDOException $e) {
        echo "Error al actualizar Orden" 
    }
} else {
    echo "No se enviaron los datos para actualizar";
    exit();
}
?>
