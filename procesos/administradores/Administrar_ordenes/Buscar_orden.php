<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buscando Ordenes </title>
</head>
<body>
    <h1>Buscando Ordentes </h1>
</body>
</html>

<?php
require_once '../../Conexion.php';

$Dato = strtolower($_POST['Dato']); 
$Dato = str_replace("-", "", $Dato); 

try {
    // Realizar la consulta SELECT
    $consulta = $base->prepare("SELECT * FROM OrdenesCapturas WHERE LOWER(Nombre) = ? OR REPLACE(Identidad, '-', '') = ?");
    $consulta->bindParam(1, $Dato);
    $consulta->bindParam(2, $Dato);
    $consulta->execute();
    $ordenesCapturas = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
    if (empty($ordenesCapturas)) {
        echo "No se encontraron órdenes de captura para el dato proporcionado.";
    } else {
        echo "<table border='1'>
            <tr>
                <th>Id</th>
                <th>Fecha Emisión</th>
                <th>Nombre</th>
                <th>Identidad</th>
                <th>Delito</th>
                <th>Víctima</th>
                <th>Estado</th>
            </tr>";
        
        foreach ($ordenesCapturas as $orden) {
            echo "<tr>";
            echo "<td>".$orden['Id']."</td>";
            echo "<td>".$orden['FechaEmision']."</td>";
            echo "<td>".$orden['Nombre']."</td>";
            echo "<td>".$orden['Identidad']."</td>";
            echo "<td>".$orden['Delito']."</td>";
            echo "<td>".$orden['Victima']."</td>";
            echo "<td>".$orden['Estado']."</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    }
    
} catch (PDOException $e) {
    // Manejar errores de PDO
    echo "Error al obtener las órdenes de captura: " . $e->getMessage();
}
?>
