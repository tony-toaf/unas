  <?php
// Iniciar la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si la sesión está iniciada
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
} else {
    header("Location: ../../index.php");
    die();
}
?>
<?php include "menu_administracion.php"; ?>
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