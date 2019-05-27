


<?php
  //incluir 
  include "persona.php";
  //instanciar la clase
  $persona = new persona();
  //asignar valores a las propiedades del objeto
  $persona->setEdad(20);  
  $persona->setAltura(1.80);  
  $persona->setPeso(90);


  //imprimir valores
  echo "<br>Edad: ".$persona->edad;
  echo "<br>Altura: ".$persona->altura;
  echo "<br>IMC: ".$persona->imc();
  
?>