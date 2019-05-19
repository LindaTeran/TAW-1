<div class="table-wrapper">
  <div class="table-title">
    <div class="row">
      <div class="col-sm-8">
        <h2>Productos</h2>
      </div>
      <div class="col-sm-4">
        <a href="index.php?modulo=producto&accion=agregar" class="btn btn-info">Agregar Producto</a>
      </div>
    </div>
  </div>
  <div class="row">
    <table class="table">
      <thead>
        <th>ID</th>
        <th>Producto</th>
        <th>Color</th>
        <th>Precio</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </thead>
      <tbody>
        <?php
          if(isset($lista)){
            while ($fila = mysqli_fetch_assoc($lista)){ ?>
              <tr>
                <td><?=$fila["id"]?></td>
                <td><?=$fila["producto"]?></td>
                <td><?=$fila["color"]?></td>
                <td><?=$fila["precio"]?></td>
                <td><a href="index.php?modulo=producto&accion=editar&id=<?=$fila["id"]?>">Editar</a></td>
                <td><a href="index.php?modulo=producto&accion=eliminar&id=<?=$fila["id"]?>">Eliminar</a></td>
              </tr>
            <?php
            }
          }
          else{ ?>
            <tr>
              <td colspan="6">No hay datos.</td>
            </tr>
          <?php
          }
        ?>

      </tbody>

    </table>
  </div>
</div>

