<?php
// Iniciar la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
if (isset($_SESSION['usuario']) && isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] ==4) { //verificar el permiso
	?>
	<?php include "menu.php";?>	
	<div id="contenedor-principal">
		<!DOCTYPE <html></html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Area de Perios</title>
			<style>
				body{
					background-image: url(../img/peritos.jpg);
					background-size: cover;
					/*filter: brightness(0.5);*/
				}
				.contenedor{
					margin-top: 20px;
					margin-bottom: 100px;
					width:100%;
					padding:20px;

				}

				.secundario{
					padding: 10px;
					width: 50%	;
					float: left;
					border: 1px solid #dddddd;

					margin-bottom: 100px;
				}
				
				.info-general{
					width: 90%;
					margin: auto;

				}
				p{
					text-align: justify;
				}
				#usuario{
					font-size: 20px;
					align-self: center;
					color: red;
				}
				.text-informacion{
					font-size: 30px;
					color: black;
				}

			</style>
		</head>
		<body>
			<div class="contenedor">
				<div class="secundario">
					<h1 class="text-center">Usuario Activo</h1>
					<ul class="">	
						<ul class="mt-2">
							<li><a href="peritos/opsiones_peritos.php">
								<h1 id="usuario" class="text-center"><?php echo $usuario;?></h1>
							</a></li>
						</ul>
					</ul>
				</div>

				<div class="secundario">
					<h2 class="text-center">BUSCAR NUMERO</h2>
					<p class="text-center">Introduce el numero sin guiones</p>
					<hr class="bg-success col-sm-4s">

					<form action="post" method="get" accept-charset="utf-8">
						<div class="input-group mbs-3">
							<input type="text" class="form-control col-sm-12" placeholder="Buscar..." id="searchInput">
							<div class="input-group-append">
								<button class="btn btn-danger" value="Buscar" type="submit" formaction="../procesos/peritos/Ver_datos/buscar_numero.php" name="buscar">Buscar</button>	
							</div>

						</div>	
					</div>
				</form>

			</div>

			<div class= info-general>
				<br>
				<h1 class="text-center">AREA DE PERITOS</h1>
				<hr class="bg-success col-sm-4">
				<!-- escribir de que se encarga cada uno -->
				<div class="container ">
					<div class="row">
						<div class="col text-center">
							<p class="text-informacion">
								El area de peritaje de la <b>UNIDAD NACIONAL ANTISECUESTRO</b> es la encargada de llevar la administracion de la informacion solicitada a la UIC.
							</p>
						</div>	
					</div>
				</div>
			</div>



		</body>
		</html>
		<?php
	} else {
    // Si no cumple con los requisitos, redirigir a otra página
		header("Location: ../procesos/funciones/sin_permisos.php");
    //echo "sin permisos";

	}
?>