<?php 
  class mvcController{
    //Llamar a la plantilla
    public function plantilla(){
      //include se utiliza para invocar el archivo que tiene el código html
      include "views/template.php";
    }
    //Interacción con el usuario
    public function enlacesPaginasController(){
      if(isset($_GET["action"])){
        $enlacesController = $_GET["action"];
      }
      else{
        $enlacesController = "index";
      }
      $respuesta = enlacesPaginas::enlacesPaginasModel($enlacesController);
    
      include $respuesta;
    }
    
  }



?>