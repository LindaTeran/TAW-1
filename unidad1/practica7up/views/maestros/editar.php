<div class="table-wrapper">
  <div class="table-title">
    <div class="row">
      <div class="col-sm-8">
        <h2>Editar Maestro</h2>
      </div>
      <div class="col-sm-4">
        <a href="index.php?modulo=habitaciones" class="btn btn-info">Regresar</a>
      </div>
    </div>
  </div>
  <div class="<?php echo $class?>">
    <?php echo $message;?>
  </div>
  <div class="row">
    <form method="post" action="index.php?modulo=maestros&accion=editar&id=<?=$fila['id']?>" enctype="multipart/form-data">
      <div class="col-md-12">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" maxlength="255" placeholder="Nombre" required value="<?=$fila['nombre']?>">
      </div>
       <div class="col-md-12 pull-right">
      <br/>
      </div>
      
      <div class="col-md-12">
        <label for="tipo">Tipo</label>
        <select class="form-control" id="tipo" name="tipo">
							<option value="1">Simple</option>
							<option value="2">Doble</option>
              <option value="3">Matrimonial</option>
        </select>
      </div>
      
      
      <div class="col-md-12 pull-right">
      <br/>
      </div>
      
      <div class="col-md-12 pull-right">
					<h4 class="box-title">Precio</h4>
					<input type="number" id="precio" name="precio" class="form-control" placeholder="Precio" value="<?=$fila['precio']?>" required/>
      </div>
      
      
      
      <div class="col-md-12 pull-right">
      <br/>
      </div>
      
      
      <div class="col-md-12 pull-right">
					<h4 class="box-title">Imagen</h4>
					<input type="file" id="imagen" name="imagen" class="dropify" data-default-file="http://placehold.it/1000x667" />
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