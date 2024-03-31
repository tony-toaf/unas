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


  <link rel="stylesheet" type="text/css" href="../css/menu.css">
  <title>Home</title>
  <style>
    body{
      background-image:url(../img/img.jpg);
      background-size: cover;
    }
    p{
      font-size: 30px;
      text-align: justify;
      color: white;
    }
    #titulo{
      color: white;
    }    
  </style>
</head>
<body>
  <?php  include "menu.php";?> 
  
  <!-- DEBERA CONTENER HISTORIA Y LISTA DE LOS INTEGRANTES DE LA UNIDAD -->

  <div class="col-sm-12  d-flex flex-column ">
 
    <h1 id="titulo" class=" border border-success m-4 text-center">UNIDAD NACIONAL ANTISECUESTRO</h1>

    <p class="m-2">La <b>Unidad Nacional Antisecuestro</b> con sede en San Pedro departamento de Cortes, fundada en el agno .....pendiente deagregar </p>


  </div>

</body>
</html>