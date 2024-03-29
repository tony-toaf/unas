  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eliminar expedinte</title>
  <!-- agnadiendo el bootstrap -->
  <link rel="stylesheet" href="librerias/bootstrap.min.css"> 
  
  

</head>
<body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <!-- en la siguiente linea se crea el metodo a utilizar para detonar el proceso -->
  <form  action="../../procesos/peritos/aliminar_numero.php" class="form-horizontal" method="post">
    <fieldset>
      <!-- Form Name -->
      <legend style="text-align: center;">ELIMINAR EXPEDIENTE</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Expediente a Elimnar:</label>  
        <div class="col-md-4">
          <input id="USERNAME" name="numero" type="text" placeholder="Ejem 1234-2024" class="form-control input-md" required="">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Contraseña de Usuario:</label>  
        <div class="col-md-4">
          <input id="ADDPASSWORD" name="expediente" type="text" placeholder="Password " class="form-control input-md" required="">

        </div>
      </div>
      <!-- accion de los botones -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-3">
          <input type="submit" name="eliminar" class="btn btn-danger" value="ELIMINAR">
          <a href="../opsiones_peritos.php" type="submit" name="cancelar" class="btn btn-primary ">Cancelar</a>
        </div>
      </div>
    </fieldset>
  </form>
 





</body>
</html>