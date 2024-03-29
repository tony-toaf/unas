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


  <form class="form-horizontal" method="post" action="../procesos/add_usuario.php">
    <fieldset>

      <!-- Form Name -->
      <legend style="text-align: center;">REGISTRAR USUARIO</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="USERNAME">Nombre</label>  
        <div class="col-md-4">
          <input id="USERNAME" name="USERNAME" type="text" placeholder="Nombre del usuario" class="form-control input-md" required="">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="ADDPASSWORD">Contraseña</label>  
        <div class="col-md-4">
          <input id="ADDPASSWORD" name="ADDPASSWORD" type="text" placeholder="Password" class="form-control input-md" required="">

        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="VILLAGENAME">RolId</label>  
        <div class="col-md-4">
          <input id="VILLAGENAME" name="VILLAGENAME" type="text" placeholder="Seleccione el tipo de usuario" class="form-control input-md" required="">

        </div>
      </div>

    
      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-3">
          <input type="submit" name="Agregar" class="btn btn-success" value="agregar" >
          <a href="../index.php" class="btn btn-danger" title="">Cancelar</a>
         
        </div>
      </div>  

    </fieldset>
  </form>
 

  <script src="librerias/jquery.min.js"></script>
  <script src="librerias/bootstrap.min.js"></script>



  </script>


</body>
</html>