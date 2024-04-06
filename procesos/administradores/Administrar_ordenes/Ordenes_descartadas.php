<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ordenes Descartadas</title>
</head>
<body>
    <h1>Ordentes Descartadas</h1>
</body>
</html>


<?php
require_once '../../Conexion.php';

try {
    // Realizar la consulta SELECT
    $consulta = $base->query("SELECT * FROM OrdenesCapturas WHERE Estado = 3 OR Estado = 4 OR Estado = 5");
    $ordenesCapturas = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
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
    
} catch (PDOException $e) {
    // Manejar errores de PDO
    echo "Error al obtener las órdenes de captura: " . $e->getMessage();
}
?>
    