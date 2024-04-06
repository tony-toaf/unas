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


    <form class="form-horizontal" method="post" action="../../../procesos/administradores/Administrar_ordenes/Cambiar_orden_estado.php">
      <fieldset>

        <!-- Form Name -->
        <legend style="text-align: center;">Cambiar Estatus de Orden</legend>

        
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="Dato">Nombre o Identidad</label>  
          <div class="col-md-4">
            <input id="Dato" name="Dato" type="text" placeholder="Nombre o Identidad" class="form-control input-md">
          </div>
        </div>

        

         <div class="form-group">
          <label class="col-md-4 control-label" for="Rolid">Estado</label>  
          <div class="col-md-4">
            <input id="Estado" name="Estado" type="number" placeholder="Nuevo estado de la orden" class="form-control input-md">
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