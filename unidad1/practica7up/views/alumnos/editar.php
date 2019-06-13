<div class="box-content card white">
  <h4 class="box-title">Editar Alumno</h4>
  <!-- /.box-title -->
 <div class="col-sm-12" align="right">
        <a href="index.php?modulo=alumnos" class="btn btn-info">Regresar</a>
      </div>
  <div class="card-content">
    <div class="<?php echo $class?>">
    <?php echo $message;?>
  </div>
    
     <div class="col-md-12 pull-right">
      <br/>
      </div>
      
    <form method="post" action="index.php?modulo=alumnos&accion=editar&id=<?=$fila['id']?>" enctype="multipart/form-data">
      
      <div class="col-md-12">
        <label for="matricula">Matricula:</label>
        <input type="text" name="matricula" id="matricula" class="form-control" maxlength="255" readonly value="<?=$fila['matricula']?>">
      </div>
       <div class="col-md-12 pull-right">
      <br/>
      </div>
      <div class="col-md-12">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" maxlength="255" placeholder="Nombre" required value="<?=$fila['nombre']?>">
      </div>
       <div class="col-md-12 pull-right">
      <br/>
      </div>
      <div class="col-md-12">
        <label for="ape_pat">Apellido Paterno:</label>
        <input type="text" name="ape_pat" id="ape_pat" class="form-control" maxlength="255" placeholder="Apellido paterno" required value="<?=$fila['ape_pat']?>">
      </div>
         <div class="col-md-12 pull-right">
      <br/>
      </div>
      <div class="col-md-12">
        <label for="ape_mat">Apellido Materno:</label>
        <input type="text" name="ape_mat" id="ape_mat" class="form-control" maxlength="255" placeholder="Apellido materno" required value="<?=$fila['ape_mat']?>">
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
          
