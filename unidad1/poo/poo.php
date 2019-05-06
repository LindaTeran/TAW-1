<?php
  //Trabajar en  POO
  //CLASE: Modelo que utiliza para crear objetos que comparten un mismo comportamiento, estado o identidad
  
  class automovil{
    //PROPIEDADES: son las características que puede tener un objeto
    public $marca;
    public $modelo;
    
    //METODOS: Algoritmo asosiado a un objeto que indica la capacidad de lo que éste puede hacer. La unica diferencia entre método y función es que llamamos método a las funciones 
    //de una clase en POO, mientras que llamamos funciones a los algoritmos en programacion estructurada
    
    public function mostrar(){
      echo "<p> Hola soy un $this->marca, modelo $this->modelo </p>";
    }
    
    
    
  }

  //OBJETOS: Una entidad provista de métodos o mensajes a los cuales responde; atributos con valores concretos y propiedades
  $a = new automovil();
  $a->marca = "Toyota";
  $a->modelo = "Corolla";
  $a->mostrar();

  $b = new automovil();
  $b->marca = "Volkswagen";
  $b->modelo = "Jetta";
  $b->mostrar();


?>