  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- agnadiendo el bootstrap -->
  <link rel="stylesheet" href="librerias/bootstrap.min.css"> 
  
  

</head>
<body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <!-- en la siguiente linea se crea el metodo a utilizar para detonar el proceso -->
  <form class="form-horizontal" method="post">
    <fieldset>

      <!-- Form Name -->
      <legend style="text-align: center;">AÑADIR NUEVO NUMERO</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="USERNAME">Numero sin guiones</label>  
        <div class="col-md-4">
          <input id="USERNAME" name="USERNAME" type="text" placeholder="12345678" class="form-control input-md" required="">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="ADDPASSWORD">No Expediente</label>  
        <div class="col-md-4">
          <input id="ADDPASSWORD" name="ADDPASSWORD" type="text" placeholder="123-2023" class="form-control input-md" required="">

        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGENAME">Victima</label>  
        <div class="col-md-4">
          <input id="VILLAGENAME" name="VILLAGENAME" type="text" placeholder="Victima del caso" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGECODE">Imei </label>  
        <div class="col-md-4">
          <input id="VILLAGECODE" name="VILLAGECODE" type="text" placeholder="sin guiones" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGECODE">Sinopsis</label>  
        <div class="col-md-4">
          <input id="VILLAGECODE" name="VILLAGECODE" type="text" placeholder="En caso de no haber escribe 'null' " class="form-control input-md" required="">
        </div>
      </div>

       <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGECODE">Tipo</label>  
        <div class="col-md-4">
          <input id="VILLAGECODE" name="VILLAGECODE" type="text" placeholder="llamada, mensajes o cdr" class="form-control input-md" required="">
        </div>
      </div>

       <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGECODE">Propetario</label>  
        <div class="col-md-4">
          <input id="VILLAGECODE" name="VILLAGECODE" type="text" placeholder="nombre del propietario" class="form-control input-md" required="">
        </div>
      </div>

       <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGECODE">ID propietario</label>  
        <div class="col-md-4">
          <input id="VILLAGECODE" name="VILLAGECODE" type="text" placeholder="id del propietario" class="form-control input-md" required="">
        </div>
      </div>

       <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGECODE">Observaciones</label>  
        <div class="col-md-4">
          <input id="VILLAGECODE" name="VILLAGECODE" type="text" placeholder="" class="form-control input-md" required="">
        </div>
      </div>

      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-3">
          <input type="submit" name="actualizar" class="btn btn-success" value="actualizar">
          <a href="../a_peritos.php" type="submit" name="cancelar" class="btn btn-danger ">Cancelar</a>
        </div>
      </div>

    </fieldset>
  </form>
 

  <script src="librerias/jquery.min.js"></script>
  <script src="librerias/bootstrap.min.js"></script>



  </script>


</body>
</html>