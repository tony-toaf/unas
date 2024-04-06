
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
    .titulo{
      margin: 40px 20px 60px 20px;
      width: 100%;
      text-align: center;
      border: 1px solid #dddddd;
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
            <button class="dropbtn btn btn-success">CASOS</button>
            <div class="dropdown-content">
              <a href="Caso/Agregar_caso.php">Agregar Caso</a>
              <a href="Caso/Eliminar_caso.php">Elimar Caso</a>
              <a href="Caso/Editar_caso.php">Editar Caso</a>
              <a href="../../procesos/administradores/Administrar_casos/Listar_casos.php">Listar Casos</a>
            </div>
          </div>
        </th>

      </div>
    </th>
    <th>
      <div class="dropdown">
      <button class="dropbtn btn btn-info">VEHICULOS</button>
      <div class="dropdown-content">
        <a href="Vehiculos/add_abastecimiento.php">Agregar Abastecimiento</a>
        <a href="Vehiculos/Cambiar_estado_vehiculo.php">Cambiar Estado del Vehiculo</a>
        <a href="../../procesos/administradores/Control_vehiculos/Listar_vehiculos.php">Listar Vehiculos</a>
        <a href="Vehiculos/add_vehiculo.php">Agregar Vehiculo</a>
        <a href="Vehiculos/Eliminar_vehiculo.php">Eliminar Vehiculo</a>
        
      </div>
  </th>
  <th>
    <div class="dropdown">
      <button class="dropbtn btn btn-info">ORDENES DE CAPTURA</button>
      <div class="dropdown-content">
        <a href="Ordenes_captura/Add_ordenes.php">Agregar Nueva Orden</a>
        <a href="../../procesos/administradores/Administrar_ordenes/Odenes_pendientes.php">Ordenes  Pendientes</a>
        <a href="../../procesos/administradores/Administrar_ordenes/Ordenes_ejecutadas.php">Ordenes Ejecutadas</a> 
        <a href="../../procesos/administradores/Administrar_ordenes/Ordenes_descartadas.php">Ordenes Descartadas</a>
        <a href="Ordenes_captura/Cambiar_status_orden.php">Cambiar Orden Estatus</a>
      </div>

    </th>
    <th>
      <div class="dropdown">
        <button class="dropbtn btn btn-dark">PERSONAL</button>
        <div class="dropdown-content">
          <a href="../../procesos/administradores/Personal/Listar_personal.php">Listar Personal</a>
          <a href="Personal/Cambiar_estatus.php">Carbiar Estatus de Persona</a>
          <a href="Personal/Agregar_persona.php">Agregar Persona</a>
          <a href="Personal/Eliminar_persona.php">Eliminar Persona</a>
          <a href="Personal/Editar_persona.php">Editar Persona</a>

        </div>
      </div>
    </th>
    <th>
      <div class="dropdown">
        <button class="dropbtn btn btn-danger">ARCHIVOS</button>
        <div class="dropdown-content">
          <a href="../../procesos/administradores/Archivos/Ver_archivos.php" class="">Ver Mis Archivos</a>
          <a href="Archivos/Subir_archivos.php">Subir Archivos</a>
        </div>
      </div>
    </th>
  </tr>

</thead>
</table>


<div class= "principal">
  <div style="margin-top: 50px;" class="secundaria">
    <h1>Buscar Informacion de Orden de Captura </h1>
    <p>Introduce la informacion a buscar</p>
    <hr class="bg-danger col-sm-4s">
    <form  method="post" action="../../procesos/administradores//Administrar_ordenes/Buscar_orden.php" accept-charset="utf-8">
      <div class="input-group mbs-3">
        <input type="text" class="form-control col-sm-12" placeholder="Introduce el nombre o la identidad a buscar" name="Dato">
        <div class="input-group-append">
          <input type="submit"  class="btn btn-outline-primary"  name="" value="Buscar orden">
        </div>
      </div>
    </div>
  </form>

  
</div>





</body>
</html>
