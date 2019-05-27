<?php
//variable de texto
	
	$palabra = "ITI AW";
	echo("Esto es una variable de texto: $palabra");
  var_dump($palabra);
  echo "<br><br>";  

  $colores = array("rojo","amarillo");
  echo "esto es una variable de arreglo: $colores [1] <br>";
  var_dump($colores);
  echo "<br><br>";

  //variable de arreglo con propiedades
  $verduras = array("verdura1 " => "lechuga","verdura2" => "cebolla", "verdura3" => "tomate");
  echo "esto es una variable arreglo con propiedades: $verduras[verdura1] <br>";
  var_dump($verduras);
  echo "<br><br>";

  //variable de tipo objeto
  $frutas = (object)["fruta1" => "pera", "fruta2" => "sandia"];
  echo "Esto es una variable de tipo objecto: $frutas->fruta1 <br>";
  var_dump($frutas);

?>