<?php include "menu_peritos.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap.min.css">
  <link rel="stylesheet" href="../../librerias/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../css/menu.css">
  <title>corea</title>
</head>
<body>
	<h1 class="text-center border border-danger">Corea</h1>
	<table class="table col-sm-12">
    <thead>
      <tr>
        <th><a href="" class="btn btn-outline-primary">VER MIS ARCHIVOS</a></th>
        <th><a href="../resources/subir_archivos.php" class="btn btn-outline-primary">SUBIR ARCHIVOS</a></th>
        <th><a href="../resources/add_numero.php" class="btn btn-outline-secondary">AÑADIR NUMERO</a></th> <br>
      </tr>
      <tr>
        <th><a href="../resources/eliminar_numero.php" class="btn btn-outline-danger">ELIMINAR NUMERO</a></th>
        <th><a href="" class="btn btn-outline-success">DATOS PERSONALES</a></th>
      </tr>

    </thead>
  </table>
  <div class="form-group">
    <label class="col-md-4 control-label" for="button1id"></label>



    <div class="col-md-8">




    </div>
  </div>


  <!-- se debe incliur el boton para agnadir los archivos -->



  <!-- creando buscador de numeros -->
  <form action="" method="post">

    <div class="container mt-5">
      <h2 class="text-center">Buscar numeros</h2>
      <p class="text-center text-primary">Introduce el numero sin guiones</p>
      <hr class="bg-danger col-sm-4s">
      <div class="input-group mbs-3">

        <input type="text" class="form-control col-sm-12" placeholder="Buscar un numero" id="searchInput">
        <div class="input-group-append">
          <input type="submit" class="btn btn-outline-primary" name="buscar" value="Buscar">
          <!-- este boton debe buscarn el la base de datos le numero -->
        </div>
    </div>

    </form>

    <br>
    <br>
    <hr class="bg-danger m-4">

    <!-- creando buscador de todos los datos del caso -->
    <form action="" method="post">

    <div class="container mt-5">
      <h2 class="text-center">Ver toda la informacion del caso</h2>
      <p class="text-center text-danger">Introduce el numero de expediente del caso</p>
      <hr class="bg-danger col-sm-4s">
      <div class="input-group mbs-3">

        <input type="text" class="form-control col-sm-12" placeholder="ejem: 123-2023" id="searchInput">
        <div class="input-group-append">
          <input type="submit" class="btn btn-outline-primary" name="buscar" value="Buscar">
          <!-- este boton debe buscarn el la base de datos le numero -->
        </div>
    </div>

    </form>
  
</body>
</html>