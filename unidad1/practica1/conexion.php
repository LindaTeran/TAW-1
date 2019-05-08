<?php
  $bd ='escuela';
  $servidor='localhost';
  $usuario='root';
  $contrasena='zanahoria1teran';
  //creamos una conexión a la base de datos
  $conexion=mysqli_connect($servidor, $usuario,$contrasena,$bd);


  // checamos la conexion
  if(!$conexion){
    die('Conexion a la base de datos ' . $bd . ' falló: ' . mysqli_connect_error());
  }else{
    
  }



 ?>
