<?php 
require_once "./models/habitaciones.php";
require_once "./models/clientes.php";


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
        if($modulo == "habitaciones"){
          $modelo = new habitaciones();
          switch($accion){
            case "agregar": 
               $res = $modelo->agregar($_POST["tipo"], $_POST["nombre"], $_POST["precio"]);
               break;
            case "editar": 
               $res = $modelo->editar($_POST["id"], $_POST["tipo"], $_POST["nombre"], $_POST["precio"]);
              break;
          }
          
        }
        
         if($modulo == "clientes"){
          $modelo = new clientes();
          
          switch($accion){
            case "agregar": 
               $res = $modelo->agregar($_POST["nombre"], $_POST["ape_pat"], $_POST["ape_mat"], $_POST["telefono"], $_POST["genero"], $_POST["tipo"]);
               break;
            case "editar": 
               $res = $modelo->editar($_POST["id"], $_POST["nombre"], $_POST["ape_pat"], $_POST["ape_mat"], $_POST["telefono"], $_POST["genero"], $_POST["tipo"]);
               break;
          }
          
        }
        if($res){
          $message= "Datos guardados con éxito ";
          $class="alert alert-success";
        }else{
          $message="No se pudieron guardar los datos";
          $class="alert alert-danger";
        }
      }
      
     // si hay que mostrar alguna informacion
     if($modulo != "index" && $accion != "agregar"){
        switch($modulo){
            case "habitaciones":$modelo = new habitaciones(); break;
            case "clientes":$modelo = new clientes(); break;
        }
        
        // si es una lista de datos
        if($accion == "lista"){
          $lista = $modelo->listar();
        }
       
        
        // si es un solo registro
        $id = $_GET["id"];
        if(isset($id) &&  ($accion == "eliminar") ){
          $fila = $modelo->buscar($id);
          if($fila){
            $res = $modelo->eliminar($id);
          }
        }
        
      }
      
      if($modulo=="habitaciones"){
        $modelo = new habitaciones();
      }
      if($modulo=="clientes"){
        $modelo = new clientes();
      }
      $respuesta = enlacesPaginas::enlacesPaginasModel($modulo, $accion);
      include $respuesta;

    }
    
    
  }



?>