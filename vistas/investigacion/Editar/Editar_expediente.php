  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Expediente</title>
  <!-- agnadiendo el bootstrap -->
  <link rel="stylesheet" href="librerias/bootstrap.min.css"> 

</head>
<body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <!-- en la siguiente linea se crea el metodo a utiliza
    r para detonar el proceso -->
  <form class="form-horizontal" method="post" action="../../../procesos/investigadores/Editar_Expediente/Editar_expediente.php">
    <fieldset>

      <!-- Form Name -->
      <legend style="text-align: center;">ACTUALIZAR EXPEDIENTE</legend>
      <div class="form-group">
        <label class="col-md-4 control-label" for="Expediente">Numero Expediente A Editar</label>  
        <div class="col-md-4">
          <input id="Expediente" name="Expediente" type="text" placeholder="Ejemp 123-2023" class="form-control input-md"  required>

        </div>
      </div>
  
      <div class="form-group">
        <label class="col-md-4 control-label" for="Agente">Agente de Caso</label>  
        <div class="col-md-4">
          <input id="Agente" name="Agente" type="text" placeholder="Agente De Caso" class="form-control input-md" >

        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="Victima">Nombre De La Victima</label>  
        <div class="col-md-4">
          <input id="Victima" name="Victima" type="text" placeholder="Nombre De La Victima" class="form-control input-md" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="Identidad">Identidad De La Victima</label>  
        <div class="col-md-4">
          <input id="Identidad" name="Identidad" type="text" placeholder="Identidad De La Victima" class="form-control input-md" >
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="Edad">Edad De La Victima</label>  
        <div class="col-md-4">
          <input id="Edad" name="Edad" type="text" placeholder="Edad De La Victima" class="form-control input-md" >
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="Sinopsis">Sinopsis o Hechos</label>  
        <div class="col-md-4">
          <input id="Sinopsis" name="Sinopsis" type="text" placeholder="Lo que paso" class="form-control input-md" >
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-3">
          <input type="submit" name="actualizar" class="btn btn-success" value="ACTUALIZAR EXPEDIENTE">
          <a href="../opsiones_investigadores.php" type="submit" name="cancelar" class="btn btn-danger ">Cancelar</a>
        </div>
      </div>

    </fieldset>
  </form>
 

  <script src="librerias/jquery.min.js"></script>
  <script src="librerias/bootstrap.min.js"></script>



  </script>


</body>
</html>