<?php
// Iniciar la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['usuario']) && isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == 3 || $_SESSION['id_rol'] == 4) { //verificar el permiso
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
<?php
} else {
    // Si no cumple con los requisitos, redirigir a otra página
    header("Location: ../procesos/funciones/sin_permisos.php");

    
    
}
?>