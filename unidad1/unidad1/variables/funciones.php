<?php
  //funciones sin propiedades
  function saludo(){
    echo "hola soy alumno de iti <br>";
  }
  
  saludo();
  
  //función con parametro
  function despedida($adios){
    echo $adios."<br>";
  }
  
  despedida("<br> Adios, me voy <br>");
  
  //funcion con retorno
  function retorno($retorno){
    return $retorno;
  }
  echo retorno("Retorno en una función");

?>