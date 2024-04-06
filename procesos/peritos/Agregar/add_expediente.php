<?php
// archivo.php
require 'conexion.php';

// Ahora puedes usar la conexión $base aquí
// Por ejemplo:
$stmt = $base->prepare("SELECT * FROM tabla");
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Continuar con el resto del código...
?>
