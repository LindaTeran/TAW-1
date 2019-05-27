<div class="table-wrapper">
  <div class="table-title">
    <div class="row">
      <div class="col-sm-8">
        <h2>Agregar Habitación</h2>
      </div>
      <div class="col-sm-4">
        <a href="index.php?modulo=habitaciones" class="btn btn-info"> Regresar</a>
      </div>
    </div>
  </div>
  <div class="<?php echo $class?>">
    <?php echo $message;?>
  </div>
  <div class="row">
    <form method="post" action="index.php?modulo=habitaciones&accion=agregar">
      <div class="col-md-12">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" maxlength="255" placeholder="Nombre" required>
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
      
      <div class="col-md-12">
        
      
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" class="form-control" maxlength="255" placeholder="Precio" required>
      </div>
     

      <div class="col-md-12 pull-right">
      <br/>
      </div>
      <div class="col-md-12 pull-right">
        <button type="submit" class="btn btn-success">Guardar datos</button>
      </div>
    </form>
  </div>
</div>