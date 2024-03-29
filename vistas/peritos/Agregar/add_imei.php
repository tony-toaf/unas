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
      <legend style="text-align: center;">AÑADIR NUEVO IMEI  </legend>

    

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="ADDPASSWORD">Numero Expediente</label>  
        <div class="col-md-4">
          <input id="ADDPASSWORD" name="ADDPASSWORD" type="text" placeholder="Ejemp 123-2023" class="form-control input-md" required="">

        </div>
      </div>
      
       <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGECODE">Tipo</label>  
        <div class="col-md-4">
          <input id="VILLAGECODE" name="VILLAGECODE" type="text" placeholder="Tipo de informacion que lego, llamada, mensajes o cdr" class="form-control input-md" required="">
        </div>
      </div>

       <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGECODE">Propetario</label>  
        <div class="col-md-4">
          <input id="VILLAGECODE" name="VILLAGECODE" type="text" placeholder="nombre del propietario segun el investigador" class="form-control input-md" required="">
        </div>
      </div>

       <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGECODE">En Uso De</label>  
        <div class="col-md-4">
          <input id="VILLAGECODE" name="VILLAGECODE" type="text" placeholder="Es como lo idenfica la sala" class="form-control input-md" required="">
        </div>
      </div>

       <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGECODE">Observacion</label>  
        <div class="col-md-4">
          <input id="VILLAGECODE" name="VILLAGECODE" type="text" placeholder="" class="form-control input-md" required="">
        </div>
      </div>

      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-3">
          <input type="submit" name="actualizar" class="btn btn-success" value="AGREGAR IMEI">
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