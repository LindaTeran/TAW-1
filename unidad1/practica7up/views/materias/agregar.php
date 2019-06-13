<div class="box-content card white">
  <div class="col-sm-12">
  <br>
  </div>
  <div class="col-sm-9">
    <h4 class="box-title">Agregar Grupo</h4>
  </div>
  <div class="col-sm-3"><a href="index.php?modulo=grupos" class="btn btn-info"> Regresar</a></div>
  
  <div class="col-sm-12">
  <div class="card-content">
    <div class="<?php echo $class?>">
    <?php echo $message;?>
  </div>
    <form method="post" action="index.php?modulo=grupos&accion=agregar">
       <div class="col-md-12">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" maxlength="255" placeholder="Nombre" required>
      </div>
      <div class="col-md-12 pull-right">
      <br/>
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
          
