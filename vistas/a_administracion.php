	<?php
// Iniciar la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si la sesión está iniciada
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
} else {
    header("Location: ../indesx.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../librerias/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome.all.css">
	<title>administracion</title>
</head>
<body>

	<?php 
	include "menu.php";?>	

	<h1>AREA DE ADMINISTRACION</h1>

	<h2>USUARIO ACTIVO</h2>
	<ol>
		<li><a href="administracion/opsiones_administradores.php"><?php echo $usuario;?></a></li>
		

	</ol>
	
</body>
</html>