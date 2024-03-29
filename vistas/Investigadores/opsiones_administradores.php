
<?php
// Iniciar la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si la sesión está activa
if (!isset($_SESSION['usuario'])) {
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Location: ../../index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../../librerias/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../css/menu.css">
	<title>opsions_administradores</title>
</head>
<body>

	<p>configurar lo que haaran los administradores</p>
</body>
</html>