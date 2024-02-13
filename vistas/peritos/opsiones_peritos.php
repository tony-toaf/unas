
<?php
// Iniciar la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $usuario = $_SESSION['usuario'];
}

// Verificar si la sesión está activa
if (!isset($_SESSION['usuario'])) {
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Location: ../../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap.min.css">
  <link rel="stylesheet" href="../../librerias/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../css/menu.css">

  <title>opsiones_peritos</title>
</head>
<body>
	<?php //include "menu_peritos.php"; ?>
	<h2 class="text-center border border-danger col-sm-12">
  <?php echo "usuario: ". $usuario;?>
  </h2>

  <table class="table col-sm-12">
    <thead>
      <tr>
        <th><a href="../../procesos/procesos_peritos/ver_archivos/ver_archivos.php" class="btn btn-outline-primary">VER MIS ARCHIVOS</a></th>

        <th><a href="../../procesos/procesos_peritos/subir_archivos/subir_archivos.php" class="btn btn-outline-primary">SUBIR ARCHIVOS</a></th>

        <th><a href="../../procesos/procesos_peritos/add_numero.php" class="btn btn-outline-secondary">AÑADIR NUMERO</a></th> <br>
      </tr>

      <tr>
        <th><a href="../../procesos/procesos_peritos/eliminar_numero.php" class="btn btn-outline-danger">ELIMINAR NUMERO</a></th>
      
        <th><a href="../../procesos/procesos_peritos/add_caso/add_caso.php" class="btn btn-outline-secondary">AÑADIR CASO</a></th>
      
        <th><a href="../../procesos/procesos_peritos/datos_personales/datos_personales.php" class="btn btn-outline-success">DATOS PERSONALES</a></th>
      </tr>

    </thead>
  </table>
  <div class="form-group">
    <label class="col-md-4 control-label" for="button1id"></label>

    <div class="col-md-8">

    </div>
  </div>


  <!-- creando buscador de numeros -->
  <form action="../../procesos/peritos/busqueda_numero.php" method="post">

    <div class="container mt-5">
      <h2 class="text-center">Buscar numeros</h2>
      <p class="text-center text-primary">Introduce el numero sin guiones</p>
      <hr class="bg-danger col-sm-4s">
      <div class="input-group mbs-3">

        <input type="text" class="form-control col-sm-12" placeholder="Buscar un numero" name="numero">
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
    <form action="../../procesos/peritos/busqueda_exp.php" method="post">

    <div class="container mt-5">
      <h2 class="text-center">Ver toda la informacion del caso</h2>
      <p class="text-center text-danger">Introduce el numero de expediente del caso</p>
      <hr class="bg-danger col-sm-4s">
      <div class="input-group mbs-3">

        <input type="text" class="form-control col-sm-12" placeholder="ejem: 123-2023" name="expediente">
        <div class="input-group-append">
          <input type="submit" class="btn btn-outline-primary" name="buscar" value="Buscar">
          <!-- este boton debe buscarn el la base de datos le numero -->
        </div>
    </div>

    </form>

  </body>
  </html>
