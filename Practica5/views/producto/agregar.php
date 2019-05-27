<div class="table-wrapper">
  <div class="table-title">
    <div class="row">
      <div class="col-sm-8">
        <h2>Agregar Producto</h2>
      </div>
      <div class="col-sm-4">
        <a href="index.php?modulo=producto" class="btn btn-info"> Regresar</a>
      </div>
    </div>
  </div>
  <div class="<?php echo $class?>">
    <?php echo $message;?>
  </div>
  <div class="row">
    <form method="post" action="index.php?modulo=producto&accion=agregar">
      <div class="col-md-12">
        <label for="producto">Producto:</label>
        <input type="text" name="producto" id="producto" class="form-control" maxlength="255" placeholder="Producto" required>
      </div>
      <div class="col-md-12">
        <label for="color">Color:</label>
        <input type="text" name="color" id="color" class="form-control" maxlength="255" placeholder="Color" required>
      </div>
      <div class="col-md-12">
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" class="form-control" maxlength="255" placeholder="Precio" required>
      </div>

      <div class="col-md-12 pull-right">
        <button type="submit" class="btn btn-success">Guardar datos</button>
      </div>
    </form>
  </div>
</div>