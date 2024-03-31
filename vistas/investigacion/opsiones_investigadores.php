
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

  <title>Opsiones Peritos</title>

  <style>
    body{
      background-image: url(../img/investigador.png);
    }

    .titulo{
      width: 100%;
      text-align: center;
      border: 1px solid #dddddd;
      margin-bottom:30px;
      padding: 10px;
    }
    
    .dropbtn {
      padding: 16px;
      font-size: 16px;
      cursor: pointer;
      margin-left: 20px;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #3e8e41;
    }
    table{
      width:100%;
    }

    .principal{
      margin-top:60px;
      width: 100%;
    }

    .secundaria{
      width: 70%;
      margin: auto  ;
      text-align: center;
    }


    

    
  </style>
</head>
<body>
	<h1 class="titulo">
    <?php echo "Usuario: ".$usuario;?>
  </h1>

  <table class="opsiones">
    <thead>
      <tr>
        <th><div class="dropdown">
          <div class="dropdown">
            <button class="dropbtn btn btn-success">VER MIS DATOS</button>
            <div class="dropdown-content">
              <a href="../../procesos/investigadores/Ver_datos/Ver_archivos.php" class="">Ver Archivos de Caso</a>
              <a href="../../procesos/investigadores/Ver_datos/Listar_casos.php">Listar Casos Asignados</a>


            </div>
          </div>
        </th>

      </div>
    </th>
    <th>
      <div class="dropdown">
        <a href="Subir_archivos/subir_archivos.php" class="btn btn-primary">SUBIR ARCHIVOS</a>

      </div>
    </div>
  </th>
  <th>
    <div class="dropdown">
      <button class="dropbtn btn btn-info">AGREGAR</button>
      <div class="dropdown-content">
        <a href="Add_caso/Crear_caso.php">Agregar Expediente</a>
        
      </div>

    </th>
    <th>
      <div class="dropdown">
        <button class="dropbtn btn btn-dark">EDITAR</button>
        <div class="dropdown-content">
          <a href="Editar/Editar_Expediente.php">Editar Expediente</a>
         

        </div>
      </div>
    </th> 
    <th>
      <div class="dropdown">
        <button class="dropbtn btn btn-danger">ELIMINAR</button>
        <div class="dropdown-content">
          <a href="Eliminar/Eliminar_expediente.php">Eliminar Caso</a>
          
        </div>
      </div>
    </th>
  </tr>
</thead>
</table>

<div class= "principal">     

  <div style="margin-top: 50px;" class="secundaria">
    <h1>Buscar Expediente </h1>
    <p>Introduce el numero de Expediente</p>
    <hr class="bg-danger col-sm-4s">
    <form  method="post" accept-charset="utf-8">
      <div class="input-group mbs-3">
        <input type="text" class="form-control col-sm-12" placeholder="Buscar Expediente" name="expediente">
        <div class="input-group-append">
          <button type="submit" class="btn btn-outline-primary" name="buscar" formaction="../../procesos/peritos/Ver_datos/buscar_expediente.php">Buscar</button>
        </div>
      </div>
    </div>
  </form>

  
</div>





</body>
</html>
