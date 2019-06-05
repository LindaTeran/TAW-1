<div class="box-content card white">
  <div class="col-sm-12">
  <br>
  </div>
  <div class="col-sm-9">
    <h4 class="box-title">Agregar Alumno</h4>
  </div>
  <div class="col-sm-3"><a href="index.php?modulo=alumnos" class="btn btn-info"> Regresar</a></div>
  
  <div class="col-sm-12">
  <div class="card-content">
    <div class="<?php echo $class?>">
    <?php echo $message;?>
  </div>
    <form method="post" action="index.php?modulo=alumnos&accion=agregar">
      <div class="col-md-12">
        <label for="matricula">Matricula:</label>
        <input type="text" name="matricula" id="matricula" class="form-control" maxlength="255" placeholder="Matricula" required>
      </div>
      <div class="col-md-12 pull-right">
      <br/>
      </div>
      
       <div class="col-md-12">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" maxlength="255" placeholder="Nombre" required>
      </div>
      <div class="col-md-12 pull-right">
      <br/>
      </div>
      
      <div class="col-md-12">
        <label for="ape_pat">Apellido Paterno:</label>
        <input type="text" name="ape_pat" id="ape_pat" class="form-control" maxlength="255" placeholder="Apellido Paterno" required>
      </div>
      
      <div class="col-md-12 pull-right">
      <br/>
      </div>
      
      <div class="col-md-12">
        <label for="ape_mat">Apellido Materno:</label>
        <input type="text" name="ape_mat" id="ape_mat" class="form-control" maxlength="255" placeholder="Apellido Materno" required>
      </div>
      
      <div class="col-md-12 pull-right">
      <br>
      </div>
      
      <div class="col-md-12 pull-right">
        <button type="submit" class="btn btn-success">Guardar datos</button>
      </div>
      
      <div class="col-md-12 pull-right">
      <br/>
      </div>
    </form>
  </div>
  <!-- /.card-content -->
</div>
          
