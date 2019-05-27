<?php
require_once "database.php";
  
class habitaciones {
  private $con;
  private $tabla = "habitaciones";

  function __construct(){
    $db = new Database();
    $this->con = $db->getCon();
  }
  
  public function agregar($id, $tipo, $nombre){
    $sql = "INSERT INTO `$this->tabla` (tipo, nombre) VALUES ('$tipo','$nombre')";
    $res = mysqli_query($this->con, $sql);
    if($res){
      return true;
    }else{
      return false;
    }
    
  }
  
  public function editar($id, $tipo, $nombre){
    $sql = "UPDATE `$this->tabla` SET tipo='$tipo', nombre='$nombre' WHERE id=$id";
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
  
 /* public function listar(){
    //$sql = "SELECT * FROM `$this->tabla`";
    $sql = "SELECT v.id, p.producto, p.color, v.fecha FROM $this->tabla as v INNER JOIN productos as p on v.idProducto = p.id";
    $res = mysqli_query($this->con, $sql);
    return $res;
  }
  
  
  public function reporte1($fecha){
    $sql = "SELECT SUM(p.precio) as total FROM $this->tabla as v INNER JOIN productos as p on v.idProducto = p.id WHERE v.fecha = '$fecha'";
    $res = mysqli_query($this->con, $sql);
    $return = mysqli_fetch_assoc($res);
    return $return["total"];
  }
  
  
  public function reporte2($fecha){
    $sql = "SELECT p.producto, AVG(v.id) as promedio FROM ventas as v INNER JOIN productos AS p ON v.idProducto = p.id WHERE v.fecha = '$fecha' GROUP BY p.producto";
    $res = mysqli_query($this->con, $sql);
    return $res;
  }*/
}
  
  
?>