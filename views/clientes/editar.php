<div class="table-wrapper">
  <div class="table-title">
    <div class="row">
      <div class="col-sm-8">
        <h2>Editar Clientes</h2>
      </div>
      <div class="col-sm-4">
        <a href="index.php?modulo=clientes" class="btn btn-info">Regresar</a>
      </div>
    </div>
  </div>
  <div class="<?php echo $class?>">
    <?php echo $message;?>
  </div>
  <div class="row">
    <form method="post" action="index.php?modulo=clientes&accion=editar&id=<?=$fila['id']?>" enctype="multipart/form-data">
      <div class="col-md-12">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" maxlength="255" value="<?=$fila['nombre']?>" required>
      </div>
       <div class="col-md-12">
        <label for="ape_pat">Apellido Paterno:</label>
        <input type="text" name="ape_pat" id="ape_pat" class="form-control" maxlength="255" value="<?=$fila['ape_pat']?>" required>
      </div>
       <div class="col-md-12">
        <label for="ape_mat">Apellido Materno:</label>
        <input type="text" name="ape_mat" id="ape_mat" class="form-control" maxlength="255" value="<?=$fila['ape_mat']?>" required>
      </div>
       <div class="col-md-12">
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono" class="form-control" maxlength="255" value="<?=$fila['telefono']?>" required>
      </div>
      <div class="col-md-12">
        <label for="genero">Genero</label>
        <select class="form-control" id="genero" name="genero">
							<option value="M">Masculino</option>
							<option value="F">Femenino</option>
        </select>
      </div>
       <div class="col-md-12">
        <label for="tipo">Tipo</label>
        <select class="form-control" id="tipo" name="tipo">
							<option value="Habitual">Habitual</option>
							<option value="Esporadico">Esporadico</option>
        </select>
      </div>
      
      
      
      <div class="col-md-12 pull-right">
      <br/>
      </div>
      
      <div class="col-md-12 pull-right">
        <input type="hidden" name="id" id="id" value="<?=$fila['id']?>">
        <button type="submit" class="btn btn-success">Guardar datos</button>
      </div>
    </form>
  </div>
</div>