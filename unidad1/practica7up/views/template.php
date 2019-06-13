<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Escuela fea</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="views/assets/styles/style.min.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="views/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="views/assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="views/assets/plugin/sweet-alert/sweetalert.css">
	
	<!-- Percent Circle -->
	<link rel="stylesheet" href="views/assets/plugin/percircle/css/percircle.css">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="views/assets/plugin/chart/chartist/chartist.min.css">
	<link rel="stylesheet" href="views/assets/plugin/dropify/css/dropify.min.css">

  <!-- Data Tables -->
<link rel="stylesheet" href="views/assets/plugin/datatables/media/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="views/assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">
<!-- Fontello Icon -->
	<link rel="stylesheet" href="views/assets/fonts/fontello/fontello.css">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="views/assets/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="views/assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

	<!-- Color Picker -->
	<link rel="stylesheet" href="views/assets/color-switcher/color-switcher.min.css">
</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="index.html" class="logo">NinjaTeam</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar"><img src="http://placehold.it/80x80" alt=""><span class="status online"></span></a>
			<h5 class="name"><a href="profile.html">Emily Stanley</a></h5>
			<h5 class="position">Administrator</h5>
			<!-- /.name -->
			<div class="control-wrap js__drop_down">
				<i class="fa fa-caret-down js__drop_down_button"></i>
				<!-- /.control-list -->
			</div>
			<!-- /.control-wrap -->
		</div>
		<!-- /.user -->
	</header>
	<!-- /.header -->
	<div class="content">
   
			<!-- /.title -->
		  <?php include "modulos/nav.php";?>
			<!-- /.menu js__accordion -->
		
		<!-- /.navigation -->

  </div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Home</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->



<!-- #color-switcher -->

<div id="wrapper">
	<div class="main-content">
		<div class="col-xs-12">
			
      
      <?php 
        $mvc = new mvcController(); 
        $mvc->enlacesPaginasController();

      ?>
      
		</div>
    <footer class="footer">
			<ul class="list-inline">
				<li>2016 © NinjaAdmin.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="views/assets/script/html5shiv.min.js"></script>
		<script src="views/assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="views/assets/scripts/jquery.min.js"></script>
	<script src="views/assets/scripts/modernizr.min.js"></script>
	<script src="views/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="views/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="views/assets/plugin/nprogress/nprogress.js"></script>
	<script src="views/assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="views/assets/plugin/waves/waves.min.js"></script>
	<!-- Full Screen Plugin -->
	<script src="views/assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

	<!-- Percent Circle -->
	<script src="views/assets/plugin/percircle/js/percircle.js"></script>

	<!-- Google Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<!-- Chartist Chart -->
	<script src="views/assets/plugin/chart/chartist/chartist.min.js"></script>
	<script src="views/assets/scripts/chart.chartist.init.min.js"></script>

	<!-- FullCalendar -->
	<script src="views/assets/plugin/moment/moment.js"></script>
	<script src="views/assets/plugin/fullcalendar/fullcalendar.min.js"></script>
	<script src="views/assets/scripts/fullcalendar.init.js"></script>

<!-- Data Tables -->
	<script src="views/assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="views/assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="views/assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="views/assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
	<script src="views/assets/scripts/datatables.demo.min.js"></script>
  
	<!-- Dropify -->
	<script src="views/assets/plugin/dropify/js/dropify.min.js"></script>
	<script src="views/assets/scripts/fileUpload.demo.min.js"></script>
  
	<script src="views/assets/scripts/main.min.js"></script>
	<script src="views/assets/color-switcher/color-switcher.min.js"></script>
</body>
</html>