<?php
  
class enlacesPaginas{
  
  public function enlacesPaginasModel($modulo, $accion){
    
    
    $vista = "views/modulos/inicioSesion.php";
    
    if( $modulo == "habitaciones" || $modulo == "clientes"){   
      $vista = "views/".$modulo."/".$accion.".php";
    }
    
    
    return $vista;
  }
  
  
}
  
  
?>