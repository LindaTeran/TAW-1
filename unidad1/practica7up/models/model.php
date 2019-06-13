<?php
  
class enlacesPaginas{
  
  public function enlacesPaginasModel($modulo, $accion){
    
    
    $vista = "views/modulos/inicioSesion.php";
    
    if( $modulo == "materias" || $modulo == "grupos" || $modulo == "maestros" || $modulo == "alumnos"){   
      $vista = "views/".$modulo."/".$accion.".php";
    }
    
    
    return $vista;
  }
  
  
}
  
  
?>