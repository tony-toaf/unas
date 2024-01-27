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
	</style>
</head>
<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Sign In</h3>
					<div class="d-flex justify-content-end social_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
				</div>
				<div class="card-body">
					<form  action="procesos/loginusuario.php" method="post">
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
							<input value="Login" class="btn float-right login_btn" type="submit" name="login">

						</div>
					</form>
				</div>
				<div class="card-footer">
					<!-- PARTE DEL FOOTER -->
					<div class="d-flex justify-content-center links">
					sobre nosotros			</div>
					<div class="d-flex justify-content-center">
						<a href="registro.php">unas</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html> 