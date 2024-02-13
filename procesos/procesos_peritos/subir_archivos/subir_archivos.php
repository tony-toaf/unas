<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap.min.css">
	<link rel="stylesheet" href="../../librerias/fontawesome/css/all.min.css">

	<title>subir archivos</title>
</head>
<body>

	<div class="col-md-12 m-4">
		<!-- columna de subir archivos -->
		<form action="subirfile.php" method="post"> 

			<div class="bg-secondary text-white p-3">
				<h2 class="text-center">SUBIR ARCHIVOS</h2>
				<p class="text-center">Seleccione los archivos a subir</p>
				<hr class="bg-success col-sm-4s">
				<div class="input-group mbs-3">

					<input type="file" class="form-control col-sm-12">

					<div class="input-group-append">
						<input class="btn btn-danger" value="Subir" type="submit" name="buscar">		
						<!-- este boton debe buscarn el la base de datos le numero -->
					</div>
				</div>

			</form>


		</div>
	</div>

</body>
</html>