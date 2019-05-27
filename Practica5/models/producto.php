<?php
require_once "database.php";
  
class producto {
  private $con;
  private $tabla = "productos";

  function __construct(){
    $db = new Database();
    $this->con = $db->getCon();
  }
  
  public function agregar($producto, $color, $precio){
    $sql = "INSERT INTO `$this->tabla` (producto, color, precio) VALUES ('$producto', '$color', '$precio')";
    $res = mysqli_query($this->con, $sql);
    if($res){
      return true;
    }else{
      return false;
    }
    
  }
  
  public function editar($id, $producto, $color, $precio){
    $sql = "UPDATE `$this->tabla` SET producto='$producto', color='$color', precio='$precio' WHERE id=$id";
    $res = mysqli_query($this->con, $sql);
    if($res){
      return true;
    }else{
      return false;
    }
  }
  
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
    $res = mysqli_query($this->con, $sql);
    return $res;
  }
  
}
  
  
?>