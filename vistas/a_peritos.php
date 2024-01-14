	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../librerias/bootstrap.min.css">
		<link rel="stylesheet" href="../fontawesome.all.css">
		<!--Fontawesome CDN-->


		<!--Custom styles-->
		<link rel="stylesheet" type="text/css" href="../css/menu.css">
		<title>peritos</title>
	</head>
	<body>
		<?php include "menu.php";?>	


		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<!-- Contenido de la primera columna -->
					<div class="bg-white text-dark p-3 border border-danger">
						<h2 class="text-center">INTEGRANTES</h2>
						<ul class="">
							<ol class="mt-2">
								<li><a href="peritos/brayan.php">Brayan Izaguirre</a></li>
								<li><a href="peritos/enrique.php">Enrique Gonzalez</a></li>
								<li><a href="peritos/corea.php">Adali Corea</a></li>
								<li><a href="peritos/tony.php">Tony Alonzo</a></li>
							</ol>
						</ul>

					</div>
				</div>

				<div class="col-md-6">
					<!-- Contenido de la segunda columna -->
					<div class="bg-secondary text-white p-3">
						<h2 class="text-center">BUSCAR NUMERO</h2>
						<p class="text-center">Introduce el numero sin guiones</p>
						<hr class="bg-success col-sm-4s">
						<div class="input-group mbs-3">
							<input type="text" class="form-control col-sm-12" placeholder="Buscar..." id="searchInput">
							<div class="input-group-append">
								<input class="btn btn-danger" value="Buscar" type="submit" name="buscar">		<!-- este boton debe buscarn el la base de datos le numero -->
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>






		<br>
		<h1 class="text-center">AREA DE PERITOS</h1>
		<hr class="bg-success col-sm-4">
		<!-- escribir de que se encarga cada uno -->
		<div class="container ">
			<div class="row">
				<div class="col text-center">
					<p class="">
						El area de peritaje de la <b>UNIDAD NACIONAL ANTISECUESTRO</b> es la encargada de llevar la administracion de la informacion solicitada a la UIC.
					</p>
				</div>	
			</div>
		</div>



	</body>
	</html>
