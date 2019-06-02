<div class="box-content">
 <div class="row">
  <div class="col-sm-8">
        <h2>Habitaciones</h2>
      </div>
      <div class="col-sm-4">
        <a href="index.php?modulo=habitaciones&accion=agregar" class="btn btn-info">Agregar Habitación</a>
      </div>
  
  <table id="example" class="table table-striped table-bordered display" style="width:100%">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Precio</th>

        <th>Herramientas</th>

      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Precio</th>

        <th>Herramientas</th>
      </tr>
    </tfoot>
    <tbody>
       <?php
  if(isset($lista)){
    while ($fila = mysqli_fetch_assoc($lista)){ ?>
      <tr>
        <td><?=$fila["id"]?></td>
        <td><?=$fila["nombre"]?></td>
        <td><?=$fila["tipo"]?></td>
        <td><?=$fila["precio"]?></td>

        <td><a href="index.php?modulo=habitaciones&accion=editar&id=<?=$fila["id"]?>"  ><div class="fa-hover col-md-3 col-xs-12"><i class="ico icon-pencil-1"></i> </div></a>
          <a href="index.php?modulo=habitaciones&accion=eliminar&id=<?=$fila["id"]?>"><div class="fa-hover col-md-3 col-xs-12"><i class="ico icon-trash"></i></a></div></td>

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
