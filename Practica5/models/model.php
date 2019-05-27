<?php
  
class enlacesPaginas{
  
  public function enlacesPaginasModel($modulo, $accion){
    
    $vista = "views/modulos/inicio.php";
    
    if($modulo=="producto" || $modulo == "usuario" || $modulo == "venta"){   
      $vista = "views/".$modulo."/".$accion.".php";
    }
    else if($modulo == "reporte"){
      $vista = "views/".$modulo.".php";
    }
    
    return $vista;
  }
  
  
}
  
  
?>