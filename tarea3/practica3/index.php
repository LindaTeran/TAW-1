<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Usuarios</title>
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
                    <div class="col-sm-8"><h2>Concentrado total</h2></div>
                    <div class="col-sm-4">
                        
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Usuarios</th>
                      <th>Tipos de usuarios</th>
                      <th>Status</th>
                      <th>Accesos</th>
                      <th>Usuarios activos</th>
                      <th>Usuarios inactivos </th>
                    </tr>
                </thead>
				<?php 
				include ('database.php');
				$usuarios = new Database();
				$usRes=$usuarios->read("User");
        $stRes=$usuarios->read("Status");
        $lgRes=$usuarios->read("User_log");
        $tyRes=$usuarios->read("User_type");
        $usuario=$usuarios->read("User");
              
        $nUsuarios = mysqlI_num_rows($usRes);
        $ntipo = mysqlI_num_rows($tyRes);
        $nStts = mysqlI_num_rows($stRes);
        $nlog = mysqlI_num_rows($lgRes);
              
				?>
                <tbody>
				<?php 
          $cont=0;
          $contI = 0;
					/*
                  while ($row=mysqlI_fetch_object($usuario)){
					  if($row['status_id']==1){
              $cont++;
            }
            else{
              $contI++;
            }
				  } */
        ?>
					<tr>
            <td><?php echo $nUsuarios;?></td>
            <td><?php echo $ntipo;?></td>
            <td><?php echo $nStts;?></td>
            <td><?php echo $nlog;?></td>
            <td><?php echo $cont;?></td>
            <td><?php echo $contI;?></td>
          </tr>	
				<?php
					
				?>
                  
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html>                            