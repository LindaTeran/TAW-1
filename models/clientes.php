<?php
require_once "database.php";
  
class clientes {
  private $con;
  private $tabla = "clientes";

  function __construct(){
    $db = new Database();
    $this->con = $db->getCon();
  }
  
  public function agregar($nombre,$ape_pat, $ape_mat, $telefono, $genero, $tipo){
    $sql = "INSERT INTO `$this->tabla` (nombre, ape_pat, ape_mat, telefono, genero, tipo) VALUES ('$nombre','$ape_pat','$ape_mat','$telefono', '$genero', '$tipo')";
    $res = mysqli_query($this->con, $sql);
    if($res){
      return true;
    }else{
      return false;
    }
    
  }
  
  public function editar($id, $nombre,$ape_pat, $ape_mat, $telefono, $genero, $tipo){

    $sql = "UPDATE `$this->tabla` SET nombre='$nombre', ape_pat='$ape_pat', ape_mat='$ape_mat', telefono='$telefono', genero='$genero', tipo='$tipo' WHERE id=$id";
    $res = mysqli_query($this->con, $sql) or die("Error");
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
    //$sql = "SELECT v.id as id, v.nombre as nombre, p.nombre as tipo, v.precio as precio  FROM $this->tabla as v INNER JOIN tipohabitacion as p on v.tipo = p.id";
    $res = mysqli_query($this->con, $sql);
    return $res;
  }
  
  
  
  
  
  /*
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