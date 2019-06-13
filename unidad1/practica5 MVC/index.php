<?php
//El index muestra la salida de las vistas al usuario, también a través dde el enviaremos las distintas acciones que el usuario envpie al controlador.
//Rquire_once establece el código del archivo a utilizar

  require_once "controller/controller.php";
  require_once "models/model.php";
  $mvc = new mvcController();
  $mvc->plantilla();

?>