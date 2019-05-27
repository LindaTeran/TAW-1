<?php

class persona{
  //Propiedades de la persona
  public $edad;
  public $altura;
  public $peso;
  
  //obtener valores
  //gettters
  //edad:
  public function getEdad(){
    return $this->edad;
  }
  //peso:
  public function getPeso(){
    return $this->peso;
  }
  //altura:
  public function getAltura(){
    return $this->altura;
  }
  
  //calculos
  //setters
  public function setEdad($value){
    $this->edad=$value;
  }
  public function setPeso($value){
    $this->peso=$value;
  }
  public function setAltura($value){
    $this->altura=$value;
  }
  
  //Calcular IMC accediendo a las propiedades
  public function imc(){
    return $this->peso / ($this->altura * $this->altura);
  }
  //Calcular IMC accediendo mediante los métodos get
  public function imc2(){
    return $this->getPeso() / ($this->getAltura() * $this->getAltura());
  }
  
  
}


?>