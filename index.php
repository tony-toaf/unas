<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<link rel="stylesheet" href="librerias/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome.all.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">



	<style>
		
		body {

			background-image: url('img/img.jpg'); /* Ruta a tu imagen de fondo */
			background-position: center; /* Centra la imagen en la pantalla */
			background-repeat: no-repeat; /* Evita que la imagen se repita */
			margin: 0; /* Elimina los márgenes predeterminados del cuerpo */
			padding: 0; /* Elimina el relleno predeterminado del cuerpo */
			font-family: Arial, sans-serif; /* Elige una fuente para el contenido */

		}

		.container{
			margin-top: 80px;
			
		}

		h3{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3 >Iniciando</h3>
					
				</div>
				<div class="card-body">
					<form  action="procesos/login/conexion.php" method="post">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" name="usuario" placeholder="usuario">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" name="password" placeholder="password">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<!-- CREACION DEL BOTON -->
							<input value="Iniciar Sesion" class="btn float-right btn-success" type="submit" name="login">

						</div>
					</form>
				</div>
				<div class="card-footer">
					<!-- PARTE DEL FOOTER -->
					<div class="d-flex justify-content-center ">
						<a href="vistas/Registrar_usuario.php">Registrar Usuario</a>
					</div>
					<div class="d-flex justify-content-center links">
					sobre nosotros			</div>
					<div class="d-flex justify-content-center">
						<a href="unas.html">unas</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html> 