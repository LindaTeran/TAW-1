<div class="box-content card white">
  <h4 class="box-title">Editar Grupo</h4>
  <!-- /.box-title -->
 <div class="col-sm-12" align="right">
        <a href="index.php?modulo=grupos" class="btn btn-info">Regresar</a>
      </div>
  <div class="card-content">
    <div class="<?php echo $class?>">
    <?php echo $message;?>
  </div>
    
     <div class="col-md-12 pull-right">
      <br/>
      </div>
      
    <form method="post" action="index.php?modulo=grupos&accion=editar&id=<?=$fila['id']?>" enctype="multipart/form-data">
      
      
      <div class="col-md-12">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" maxlength="255" placeholder="Nombre" required value="<?=$fila['nombre']?>">
      </div>
       <div class="col-md-12 pull-right">
      <br/>
      </div>
      
      <div class="col-md-12 pull-right">
        <input type="hidden" name="id" id="id" value="<?=$fila['id']?>">
        <button type="submit" class="btn btn-success">Guardar datos</button>
        <div class="col-md-12 pull-right">
      <br/>
      </div>
      </div>
    </form>
    </form>
  </div>
  <!-- /.card-content -->
</div>
          
