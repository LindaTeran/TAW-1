<?php
require_once "database.php";
  //clase habitaciones controla el crud de las habitaciones
class grupos {
  //variable con para realizar conexion posteriormente
  private $con;
  private $tabla = "grupo"; //variable tabia inicializada

  //funcion construct, hace llamado a la base de datos y realiza la conexion a la bd
  function __construct(){
    $db = new Database();
    $this->con = $db->getCon();
  }
  
  //funcion agregar, inserta un nuevo registro en la base de datos.dfdddddddddddddd
  //parametros: tipo referente al tipo de habitación 
  // nombre: referente al nombre de la habitación y precio: referente al precio de la habitación
  
  public function agregar($nombre){
    $sql = "INSERT INTO `$this->tabla` (nombre) VALUES ('$nombre')";
    $res = mysqli_query($this->con, $sql);
    if($res){
      return true;
    }else{
      return false;
    }
    
  }
  //funcion editar, edita un registro existente de la base de datos.
  //parametros: tipo: referente al tipo de habitación, id: referente al id de la habitación
  // nombre: referente al nombre de la habitación y precio: referente al precio de la habitación
  
  public function editar($id, $nombre){

    $sql = "UPDATE `$this->tabla` SET  nombre='$nombre' WHERE id=$id";
    $res = mysqli_query($this->con, $sql) or die("Error");
    if($res){
      return true;
    }else{
      return false;
    }
  }
  //funcion eliminar, elimina un registro existente de la base de datos.
  //parametros: id: referente al id de la habitación
  
  public function eliminar($id){
    $sql = "DELETE FROM `$this->tabla` WHERE id=$id";
    $res = mysqli_query($this->con, $sql);
    if($res){
      return true;
    }else{
      return false;
    }
  }
    
  public function buscar($id){
    $sql = "SELECT * FROM `$this->tabla` where id='$id'";
    $res = mysqli_query($this->con, $sql);
    $return = mysqli_fetch_assoc($res );
    return $return ;
  }
  
  public function listar(){
    $sql = "SELECT * FROM `$this->tabla`";
    //$sql = "SELECT v.id as id, v.nombre as nombre, p.nombre as tipo, v.precio as precio  FROM $this->tabla as v INNER JOIN tipohabitacion as p on v.tipo = p.id";
    $res = mysqli_query($this->con, $sql);
    return $res;
  }
  
}
  
  
?>