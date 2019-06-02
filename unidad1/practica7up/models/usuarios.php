<?php 
require_once "database.php";

class usuario{
  private $con;
  private $tabla = "usuarios";
  
  function __construct(){
    $db = new Database();
    $this->con = $db->getCon();
  }
  
  public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}
  
  public function create($nombres,$apellidos,$telefono,$direccion,$correo_electronico){
			$sql = "INSERT INTO `usuarios` (usuario,contrasena) VALUES ('$usuario', '$contrasena')";
			$res = mysqli_query($this->con, $sql);
			
      if($res){
				return true;
			}else{
				return false;
			}
		}
  public function read(){
			$sql = "SELECT * FROM usuarios";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
		
  public function single_record($id){
      $sql = "SELECT * FROM usuarios where id='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
  public function busqueda($usuario, $contrasena){
    $sql = "SELECT * FROM usuarios where usuario='$usuario' and contrasena='$contrasena'";
    
    $res = mysqli_query($this->con, $sql);
    $return = mysqli_fetch_object($res );
    return $return ;
  }
  
  public function update($usuario, $contrasena $id){
			$sql = "UPDATE usuarios SET usuario='$nombres', contrasena='$apellidos' WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
  
  public function delete($id){
			$sql = "DELETE FROM usuarios WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
  
  
  
  
  
  
}






















?>