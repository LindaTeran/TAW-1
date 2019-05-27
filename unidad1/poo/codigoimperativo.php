<?php 
  //codigo imperativo o spaggetti
  $automovil1 = (object)["marca"=>"Toyota", "modelo"=>"Corolla"];
  $automovil2 = (object)["marca"=>"Chevrolet", "modelo"=>"Malibu"];
  $automovil3 = (object)["marca"=>"Nissan", "modelo"=>"Tsuru"];

  //Funcion que obtiene las propiedades de las variables objeto
  function mostrar($automovil){
    echo "<p> Hola soy un $automovil->marca, modelo $automovil->modelo </p>";
  }
  //invoca a las variables y las imprime
  mostrar($automovil1);
  mostrar($automovil2);
  mostrar($automovil3);


?>