  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>añadir imei</title>
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
      <legend style="text-align: center;">AÑADIR EXPEDIENTE</legend>

      

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="ADDPASSWORD">Numero Expediente</label>  
        <div class="col-md-4">
          <input id="ADDPASSWORD" name="ADDPASSWORD" type="text" placeholder="Ejemp 123-2023" class="form-control input-md" required="">

        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGENAME">Victima</label>  
        <div class="col-md-4">
          <input id="VILLAGENAME" name="VILLAGENAME" type="text" placeholder="Victima del caso" class="form-control input-md" required="">

        </div>
      </div>

    

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGECODE">Sinopsis</label>  
        <div class="col-md-4">
          <input id="VILLAGECODE" name="VILLAGECODE" type="text" placeholder="Hechos del Caso" class="form-control input-md" required="">
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
          <input type="submit" name="actualizar" class="btn btn-success" value="AGREGAR EXPEDIENTE">
          <a href="../opsiones_peritos.php" type="submit" name="cancelar" class="btn btn-danger ">Cancelar</a>
        </div>
      </div>

    </fieldset>
  </form>
 

  <script src="librerias/jquery.min.js"></script>
  <script src="librerias/bootstrap.min.js"></script>



  </script>


</body>
</html>