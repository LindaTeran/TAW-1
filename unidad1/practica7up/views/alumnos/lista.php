<div class="box-content">
 <div class="row">
  <div class="col-sm-8">
        <h2>Alumnos</h2>
      </div>
      <div class="col-sm-4">
        <a href="index.php?modulo=alumnos&accion=agregar"><button type="button" class="btn btn-info waves-effect waves-light">Agregar alumno<i class="zmdi zmdi-plus-circle"></i></button></a>
      </div>

  <table id="example" class="table table-striped table-bordered display" style="width:100%">
    <thead>
      <tr>
        <th>Matrícula</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Herramientas</th>

      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>Matrícula</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Herramientas</th>

      </tr>
    </tfoot>
    <tbody>
         <?php
            if(isset($lista)){
              while ($fila = mysqli_fetch_assoc($lista)){ ?>
                <tr>
                  <td><?=$fila["matricula"]?></td>
                  <td><?=$fila["nombre"]?></td>
                  <td><?=$fila["ape_pat"]?></td>
                  <td><?=$fila["ape_mat"]?></td>
                  <td><a href="index.php?modulo=alumnos&accion=editar&id=<?=$fila["id"]?>"><button type="button" class="btn-sm btn-warning waves-effect waves-light">Editar<i class="ico icon-pencil-1"></i></button></a>
                    <a href="index.php?modulo=alumnos&accion=eliminar&id=<?=$fila["id"]?>"><button type="button" class="btn-sm btn-danger waves-effect waves-light">Eliminar<i class="ico icon-trash"></i></button></a></div></td>
                  

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
