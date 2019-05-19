<div class="table-wrapper">
  <div class="table-title">
    <div class="row">
      <div class="col-sm-8">
        <h2>Editar Producto</h2>
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
    <form method="post" action="index.php?modulo=producto&accion=editar&id=<?=$fila['id']?>">
      <div class="col-md-12">
        <label for="producto">Producto:</label>
        <input type="text" name="producto" id="producto" class="form-control" maxlength="255" placeholder="Producto" required value="<?=$fila['producto']?>">
      </div>
      <div class="col-md-12">
        <label for="color">Color:</label>
        <input type="text" name="color" id="color" class="form-control" maxlength="255" placeholder="Color" required value="<?=$fila['color']?>">
      </div>
      <div class="col-md-12">
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" class="form-control" maxlength="255" placeholder="Precio" required value="<?=$fila['precio']?>">
      </div>
  
      <div class="col-md-12 pull-right">
        <input type="hidden" name="id" id="id" value="<?=$fila['id']?>">
        <button type="submit" class="btn btn-success">Guardar datos</button>
      </div>
    </form>
  </div>
</div>