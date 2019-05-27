<div class="table-wrapper">
  <div class="table-title">
    <div class="row">
      <div class="col-sm-121">
        <h2>Reportes del dia</h2>
      </div>
    </div>
  </div>
  <div class="<?php echo $class?>">
    <?php echo $message;?>
  </div>
  <div class="row">
    <table class="table">
      <tr>
        <td style="width:30%;">Fecha:</td>
        <td><?=$fecha?></td>
      </tr>
      <tr>
        <td>Total vendido en el dia:</td>
        <td>$ <?=$reporte1?></td>
      </tr>
      <tr>
        <td>Promedio por prenda:</td>
        <td>
          <table>
            <thead>
              <th>Producto</th>
              <th>Promedio</th>
            </thead>
            <tbody>
              <?php
                if(isset($reporte2)){
                  while ($fila = mysqli_fetch_assoc($reporte2)){ ?>
                    <tr>
                      <td><?=$fila["producto"]?></td>
                      <td><?=$fila["promedio"]?></td>
                    </tr>
                  <?php
                  }
                }
                else{ ?>
                  <tr>
                    <td colspan="2">No hay datos.</td>
                  </tr>
                <?php
                }
              ?>
            </tbody>
          </table>
        </td>
      </tr>
    </table>
  </div>
</div>