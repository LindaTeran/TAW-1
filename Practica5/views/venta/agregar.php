<div class="table-wrapper">
  <div class="table-title">
    <div class="row">
      <div class="col-sm-8">
        <h2>Agregar Venta</h2>
      </div>
      <div class="col-sm-4">
        <a href="index.php?modulo=venta" class="btn btn-info"> Regresar</a>
      </div>
    </div>
  </div>
  <div class="<?php echo $class?>">
    <?php echo $message;?>
  </div>
  <div class="row">
    <form method="post" action="index.php?modulo=venta&accion=agregar">
      <div class="col-md-12">
        <label for="idProducto">Producto:</label>
          <select class="form-control" name="idProducto" id="idProducto">
            <?php if(isset($lista)){
              while ($fila = mysqli_fetch_assoc($lista)){ ?>
                <option value="<?=$fila['id']?>"><?=$fila["producto"]?> <?=$fila["color"]?></option>
              <?php
              }
            }
            else{ ?>
              <option>No hay productos</option>
            <?php
            }
            ?>
            
          </select>
      </div>

      <div class="col-md-12 pull-right">
        <input type="hidden" name="idUsuario" id="idUsuario" value="">
        <button type="submit" class="btn btn-success">Guardar datos</button>
      </div>
    </form>
  </div>
</div>