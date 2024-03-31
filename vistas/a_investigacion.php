<?php
// Iniciar la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['usuario']) && isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == 2 || $_SESSION['id_rol'] == 4) { //verificar el permiso

   
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../librerias/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome.all.css">
	<title>investigacion</title>

	<style>
		body{
			background-image: url(../img/);
			background-size: cover;
		}
		h1{
			text-align: center;

		}
		#usuario{
			color: red;
			margin:  30px auto;
			border-radius: 1px solid red;
			width: 350px;

		}
		.text-informacion{
			margin-bottom:40px;
		}

		p{
			text-align: justify;
			font-size: 30px;
			margin-left: 30px;
			margin-top: 80px;
		}

		hr{
			background-color: red;
			margin: 10px;
		}
		
	</style>
</head>
<body>
	<?php include "menu.php";?>

	<h1 id="usuario"><a href="investigacion/opsiones_investigadores.php"><?php echo $usuario;?></a></h1>	
	<h1 >AREA DE INVESTIGACION</h1>
	<hr>
	<section class="text-informacion">
		<p>
			informacion asobre el area de investigacion
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