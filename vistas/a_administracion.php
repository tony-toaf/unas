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

	<style>
		body{
			/*background-image: url(../img/administracion.jpg);*/
			background-size: cover	;
		}
		#usuario{
			margin-top: 40px;
			margin-bottom: 40px;
			text-align:center;
			font-size:30px;
		}
		hr{
			width: 90%;
			background-color: red;
		}
		h1{
			text-align: center;
		}
		.text-informacion{
			font-size: 30px;
			color: black;
			margin-top: 40px;
			margin-left: 30px;
			text-align: justify;
		}
		h1{
			color: white;
		}
	</style>
</head>
<body>
	<?php
	include "menu.php";?>
	<div id="usuario">
		<a  href="administracion/opsiones_administradores.php"><?php echo $usuario;?></a>
		<hr>
	</div>
	<h1>AREA <br>DE <br>ADMINISTRACION</h1>


	<section class="text-informacion">
		<p>
			agregar informacion del area de  administracion
		</p>
		
	</section>

	
		
		

	
</body>
</html>
<?php
} else {
    // Si no cumple con los requisitos, redirigir a otra página
    header("Location: ../procesos/funciones/sin_permisos.php");

    
    
}
?>