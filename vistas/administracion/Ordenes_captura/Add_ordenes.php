  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add Ordnes</title>
    <link rel="stylesheet" href="librerias/bootstrap.min.css"> 



  </head>
  <body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <form class="form-horizontal" method="post" action="../../../procesos/administradores/Administrar_ordenes/Add_ordenes.php">
      <fieldset>

        <!-- Form Name -->
        <legend style="text-align: center;">AGREGAR ORDEN DE CAPTURA</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Fecha">Fecha de Emision de Orden</label>  
          <div class="col-md-4">
            <input id="Fecha" name="Fecha" type="text" placeholder="Fecha de Emision de la Orden" class="form-control input-md" required="">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="Nombre">Nombre</label>  
          <div class="col-md-4">
            <input id="Nombre" name="Nombre" type="text" placeholder="Nombre del usuario" class="form-control input-md">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Identidad">Identidad</label>  
          <div class="col-md-4">
            <input id="Identidad" name="Identidad" type="text" placeholder="Identidad" class="form-control input-md">

          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Delito">Delito</label>  
          <div class="col-md-4">
            <input id="Delito" name="Delito" type="text" placeholder="Describa el Delito" class="form-control input-md">
          </div>
        </div>

         <div class="form-group">
          <label class="col-md-4 control-label" for="Rolid">Victima</label>  
          <div class="col-md-4">
            <input id="Victima" name="Victima" type="text" placeholder="Nombre de la Victima" class="form-control input-md">
          </div>
        </div>


        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="button1id"></label>
          <div class="col-md-3">
            <input type="submit" name="Agregar" class="btn btn-success" value="agregar Orden" >
            <a href="../opsiones_administradores.php" class="btn btn-danger" title="">Cancelar</a>

          </div>
        </div>  

      </fieldset>
    </form>


    <script src="librerias/jquery.min.js"></script>
    <script src="librerias/bootstrap.min.js"></script>



  </script>


</body>
</html>