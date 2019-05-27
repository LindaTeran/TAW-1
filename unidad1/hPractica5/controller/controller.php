<?php 
require_once "./models/producto.php";
require_once "./models/venta.php";

  class mvcController{
    //Llamar a la plantilla
    public function plantilla(){
      //include se utiliza para invocar el archivo que tiene el código html
      include "views/template.php";
    }
        
    
    //Interacción con el usuario, revisa las paginas que quiere visitar
    public function enlacesPaginasController(){
      if(isset($_GET["modulo"])){
        $modulo = $_GET["modulo"];
      }
      else{
        $modulo = "index";
      }
      if(isset($_GET["accion"])){
        $accion = $_GET["accion"];
      }
      else{
        $accion = "lista";
      }
      
    
      // si es un formulario
      if( isset($_POST) && !empty($_POST) ) {
        
        
        if($modulo == "producto"){
          $modelo = new producto();
          
          switch($accion){
            case "agregar": 
               $res = $modelo->agregar($_POST["producto"], $_POST["color"], $_POST["precio"]);
               break;
            case "editar": 
               $res = $modelo->editar($_POST["id"], $_POST["producto"], $_POST["color"], $_POST["precio"]);
               break;
          }
          
        }
        
        if($modulo == "venta" && $accion == "agregar"){
          $modelo = new venta();
          $fecha = date("Y-m-d");
          $res = $modelo->agregar($_POST["idProducto"], $_POST["idUsuario"], $fecha);
        }
        
          
        if($res){
          $message= "Datos guardados con éxito";
          $class="alert alert-success";
        }else{
          $message="No se pudieron guardar los datos";
          $class="alert alert-danger";
        }
      }
      
     // si hay que mostrar alguna informacion
     if($modulo != "index" && $accion != "agregar"){
        switch($modulo){
            case "producto": $modelo = new producto(); break;
            case "venta": $modelo = new venta(); break;
        }
        
        // si es una lista de datos
        if($accion == "lista"){
          $lista = $modelo->listar();
        }
       
        if($accion == "reporte"){
          $fecha = date("Y-m-d");
          $reporte1 = $modelo->reporte1($fecha);
          $reporte2 = $modelo->reporte2($fecha);
        }
        
        // si es un solo registro
        $id = $_GET["id"];
        if(isset($id) && ($accion == "editar" || $accion == "eliminar") ){
          $fila = $modelo->buscar($id);
        }
        
      }
      // si es una venta hay que mostrar los productos disponibles
      else if($modulo == "venta" && $accion == "agregar"){
        $modelo = new producto();
        $lista = $modelo->listar();
      }

      $respuesta = enlacesPaginas::enlacesPaginasModel($modulo, $accion);
      include $respuesta;

    }
    
  }



?>