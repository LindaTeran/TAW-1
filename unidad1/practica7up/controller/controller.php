<?php 
require_once "./models/maestros.php";
require_once "./models/alumnos.php";
require_once "./models/materias.php";
require_once "./models/grupos.php";

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
        if($modulo == "maestros"){
          $modelo = new maestros();
          switch($accion){
            case "agregar": 
               $res = $modelo->agregar($_POST["clave_trabajo"], $_POST["nombre"], $_POST["ape_pat"], $_POST["ape_mat"], $_POST["telefono"]);
               break;
            case "editar": 
               $res = $modelo->editar($_POST["id"], $_POST["clave_trabajo"], $_POST["nombre"], $_POST["ape_pat"], $_POST["ape_mat"], $_POST["telefono"]);
              break;
          }
        }
        
        if($modulo == "alumnos"){
          $modelo = new alumnos();
          
          switch($accion){
            case "agregar": 
               $res = $modelo->agregar($_POST["matricula"], $_POST["nombre"], $_POST["ape_pat"], $_POST["ape_mat"]);
               break;
            case "editar": 
               $res = $modelo->editar($_POST["id"], $_POST["matricula"], $_POST["nombre"], $_POST["ape_pat"], $_POST["ape_mat"]);
               break;
          }          
        }
        
          if($modulo == "grupos"){
          $modelo = new grupos();
          
          switch($accion){
            case "agregar": 
               $res = $modelo->agregar($_POST["nombre"]);
               break;
            case "editar": 
               $res = $modelo->editar($_POST["id"], $_POST["nombre"]);
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
            case "grupos":$modelo = new grupos(); break;
            case "maestros":$modelo = new maestros(); break;
            case "alumnos":$modelo = new alumnos(); break;
            case "materias":$modelo = new materias(); break;
        }
        
        // si es una lista de datos
        if($accion == "lista"){
          $lista = $modelo->listar();
        }
       
        
        // si es un solo registro
        $id = $_GET["id"];
        if(isset($id) &&  ($accion == "eliminar")  || ($accion == "editar") ){
          $fila = $modelo->buscar($id);
          if($fila && $accion == "eliminar"){
            $res = $modelo->eliminar($id);
          }else{
            $fila = $modelo->buscar($id);
          }
        }
        
      }
      
     
      $respuesta = enlacesPaginas::enlacesPaginasModel($modulo, $accion);
      include $respuesta;

    }
    
    
  }



?>