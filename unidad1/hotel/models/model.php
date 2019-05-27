<?php
  
class enlacesPaginas{
  
  public function enlacesPaginasModel($modulo, $accion){
    
    $vista = "views/modulos/inicio.php";
    
    if($modulo=="habitaciones" || $modulo == "reservacion" || $modulo == "clientes"){   
      $vista = "views/"."$modulo"."/".$accion.".php";
    }
    
    
    
    return $vista;
  }
  
  
}
  
  
?>