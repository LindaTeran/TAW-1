<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD a base de datos usando POO</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>







    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/styles/style.min.css">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">
    
    <!-- Data Tables -->
    <link rel="stylesheet" href="assets/plugin/datatables/media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">

    <!-- Color Picker -->
    <link rel="stylesheet" href="assets/color-switcher/color-switcher.min.css">



</head>
<body>

    <script type="text/javascript">
    function alerta()
    {
    var mensaje;
    var opcion = confirm("Clicka en Aceptar o Cancelar");
    if (opcion == true) {
        mensaje = "Has clickado OK";
    } else {
        mensaje = "Has clickado Cancelar";
    }
    document.getElementById("ejemplo").innerHTML = mensaje;
}

</script>









<div class="main-menu">
    <header class="header">
        <a href="index.html" class="logo">TAW</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
        <div class="user">
            <a href="#" class="avatar"><img src="http://placehold.it/80x80" alt=""><span class="status online"></span></a>
            <h5 class="name"><a href="profile.html">Emily Stanley</a></h5>
            <h5 class="position">Administrator</h5>
            <!-- /.name -->
            <div class="control-wrap js__drop_down">
                <i class="fa fa-caret-down js__drop_down_button"></i>
                <div class="control-list">
                    <div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
                    <div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>
                    <div class="control-item"><a href="#"><i class="fa fa-sign-out"></i> Log out</a></div>
                </div>
                <!-- /.control-list -->
            </div>
            <!-- /.control-wrap -->
        </div>
        <!-- /.user -->
    </header>
    <!-- /.header -->
    <div class="content">

        <div class="navigation">
            <h5 class="title"> Herramientas</h5>
            <!-- /.title -->
            <ul class="menu js__accordion">
                <li>
                    <a class="waves-effect" href="create.php"><i class="menu-icon fa fa-home"></i><span>Agregar</span></a>
                </li>
                            
                
            </ul>
            
        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->














<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Listado de clientes</h4>




    <!--
    <div class="container">
        <div class="table-wrapper"> -->
            <!--
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>Clientes</b></h2></div>
                    <div class="col-sm-4">
                        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar cliente</a>
                    </div>
                </div>
            </div>
        -->

                <!-- /.box-title -->
                  


            <!--Se manda a dibujar la tabla-->
            <table class="table table-bordered" id="example" class="table table-striped table-bordered display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
						<th>E-mail</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
				<?php 
				include ('database.php');
                //se manda a llamar a la base de datos para poder agregar los campos a la tabla 
				$clientes = new Database();
				$listado=$clientes->read();
				?>
                <tbody>
				<?php 
                    //se recorre la base de datos y se agregan los campos a las variables 
					while ($row=mysqli_fetch_object($listado)){
						$id=$row->id;
						$nombres=$row->nombres." ".$row->apellidos;
						$telefono=$row->telefono;
						$direccion=$row->direccion;
						$email=$row->correo_electronico;
				?>
					<tr>
                        <!--Se imprimen las variables en la tabla-->
                        <td><?php echo $nombres;?></td>
                        <td><?php echo $telefono;?></td>
                        <td><?php echo $direccion;?></td>
						<td><?php echo $email;?></td>
                        <td>
                            <!--Botones de editar y eliminar-->
						    <a href="update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">edit</i></a>
                            <button onclick="borrar()" class="delete" title="Eliminar" data-toggle="tooltip"> <i class="material-icons" >delete</i> </button>

                                <!--Se creo una funcion para que preguntara si el usuario estaba seguro de querer eliminar el dato-->
                                <script language="javascript">
                                    function borrar(){
                                    var answer = confirm("¿Esta seguro de querer eliminar este registro?")
     
                                    if (answer){
                                    window.location = "delete.php?id=<?php echo $id;?>";
                                     }
                                    }               
                                </script>

                        </td>
                    </tr>	
				<?php
					}
				?>
                    
                
                </tbody>
            </table>
       <!-- </div>
    </div> -->  











        </div>
                <!-- /.box-content -->
    </div>
    </div>
                <!-- /.box-content -->
    </div>
            <!-- /.col-xs-12 -->
    </div>
        <!-- /.row small-spacing -->



<!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/scripts/modernizr.min.js"></script>
    <script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/plugin/nprogress/nprogress.js"></script>
    <script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
    <script src="assets/plugin/waves/waves.min.js"></script>
    <!-- Full Screen Plugin -->
    <script src="assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

    <!-- Data Tables -->
    <script src="assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
    <script src="assets/scripts/datatables.demo.min.js"></script>

    <script src="assets/scripts/main.min.js"></script>
    <script src="assets/color-switcher/color-switcher.min.js"></script>
</body>
</html>                            