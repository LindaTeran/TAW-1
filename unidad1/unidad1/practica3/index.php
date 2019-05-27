<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Clientes</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Clientes</h2></div>
                    <div class="col-sm-4">
                        <a href="create.php" class="btn btn-info"><i class="material-icons">group_add</i><br>Agregar cliente</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Teléfono</th>
                      <th>Dirección</th>
                      <th>E-mail</th>
                      <th>Acciones</th>
                    </tr>
                </thead>
				<?php 
				include ('database.php');
				$clientes = new Database();
				$resultado=$clientes->read();
				?>
                <tbody>
				<?php 
					while ($row=mysqli_fetch_object($resultado)){
						$id=$row->id;
						$nombres=$row->nombres." ".$row->apellidos;
						$telefono=$row->telefono;
						$direccion=$row->direccion;
						$correo_electronico=$row->correo_electronico;
				?>
					<tr>
            <td><?php echo $nombres;?></td>
            <td><?php echo $telefono;?></td>
            <td><?php echo $direccion;?></td>
            <td><?php echo $correo_electronico;?></td>
            <td><a href="update.php?id=<?php echo $id;?>" class="edit" title="Editar"><i class="material-icons">&#xE254;</i></a>
             <a href="delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar"><i class="material-icons">&#xE872;</i></a></td>
          </tr>	
				<?php
					}
				?>
                  
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html>                            