<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>CRUD a bd usand POO</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/3.3.7/css/bootstrap.min-css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Agregar<b> Cliente</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-success"  ></a>
                    
                    </div>
                    </div>
                </div>
            </div>
        </div>
      <?php 
      include ("database.php");
      $clientes = new Database();
      if(isset($_POST) && !empty($_POST)){
        $nombres = $clientes->sanitize($_POST['nombres']);
        $apellidos = $clientes->sanitize($_POST['apellidos']);
        $telefono = $clientes->sanitize($_POST['telefono']);
        $direccion = $clientes->sanitize($_POST['direccion']);
        $correo_electronico = $clientes->sanitize($_POST['correo_electronico']);
        
        $res = $clientes->create($nombres,$apellidos,$telefono,$direccion,$correo_electronico);
        if($res){
          $message = "Datos insertados con éxito";
          $class="alert alert-success";
        }else{
          $message = "No se pudieron insertar los datos";
          $class="alert alert-danger";
        }
        ?>
        
        <div class="<?php echo $class?>">
          <?php echo $message;?>
        </div> 
    <?php } ?>
    </div>
    <div class="row">
      <form method="post">
        <div class="col-md-6">
          <label>Nombres</label>
          <input type="text" name="nombres" id="nombres" class="form-control" maxlength="100" required>
        </div>
        <div class="col-md-6">
          <label>Apellidos</label>
          <input type="text" name="apellidos" id="apellidos" class="form-control" maxlength="100" required>
        </div>
        <div class="col-md-6">
          <label>Direccion</label>
          <input type="text" name="direccion" id="direccion" class="form-control" maxlength="100" required>
        </div>
        <div class="col-md-6">
          <label>Telefono</label>
          <input type="text" name="telefono" id="telefono" class="form-control" maxlength="100" required>
        </div>
        <div class="col-md-6">
          <label>Correo electrónico</label>
          <input type="text" name="correo_electronico" id="correo_electronico" class="form-control" maxlength="100" required>
        </div>
        <div class="col-md-12 pull-right">
          <hr>
            <button type="submit" class="btn btn-success">
              Guardar
          </button>
        </div>
        
        
        
      </form>
      
  </div>
    
  
</body>
</html>    