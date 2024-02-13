  <?php
// Iniciar la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si la sesión está iniciada
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    

} else {
    header("Location: ../index.php");
    die();
}
?>


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
  <title>Home</title>
</head>
<body>
  <?php include "menu.php";?> 
  

  <!-- ubicacion de los item del menu estan en /vistas/a_ area.php -->

  <!-- DEBERA CONTENER HISTORIA Y LISTA DE LOS INTEGRANTES DE LA UNIDAD -->

  <div class="col-sm-12  d-flex flex-column ">
    <?php echo "usuario: ". $usuario; ?>
    <h1 class="border border-success m-4 text-center">UNIDAD NACIONAL ANTISECUESTRO</h1>

    <p class="m-2">La <b>Unidad Nacional Antisecuestro</b> con sede en San Pedro departamento de Cortes, fundada en el agno .....pendiente deagregar </p>


  </div>

</body>
</html>