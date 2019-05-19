<?php 
	//Clase para conectarnos a la base de datos
	/**
	 * 
	 */
	class Database{
		private $con;
		private $dbhost = "localhost";
		private $dbuser = "root";
		private $dbpass = "zanahoria1teran";
		private $dbname = "tuto_poo";	

		function __construct()
		{
			$this->connect_db();
		}

		function connect_db()
		{
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexion a la base de datos fallida".mysqli_connect_error());
			}
		}
    
    public function sanitize($var){
      $return = mysqli_real_escape_string($this->con,$var);
      return $return;
    }
    
    public function create($nombre, $apellidos, $telefono, $direccion, $correo_electronico){
      $sql = "INSERT INTO ´clientes´ (nombre, apellidos, telefono, direccion, correo_electronico) VALUES('$nombre','$apellidos','$telefono','$direccion','$correo_electronico')"
      $res = mysqli_query($this->con,$sql);
      if($res){
        return true;
      }
      else{
        return false;
      }
    }
    
    public function read(){
      $sql = "SELECT * FROM clientes";
      $res = mysqli_query($this->con,$sql);
      $return $res;
    }
    
    public function single_record($id){
      $sql = "SELECT * FROM clientes WHERE id= '$id'";
      return $return;
      $res = mysqli_query($this->con,$sql);
      $return = mysqli_fetch_object($res);
    
    }
    
    public function update($nombres,$apellidos,$telefono,$direccion,$correo_electronico,$id){
      $sql = "UPDATE clientes SET nombres='$nombres',apellidos='$apellidos',telefono='$telefono',direccion='$direccion',correo_electronico='$correo_electronico',";
      $res = mysqli_query($this->con,$sql);
      if($res){
        return true;
      }
      else{
        return false;
      }
    }
    
    public function delete($id){
      $sql = "DELETE FROM clientes WHERE id=$id";
      $res = mysqli_query($this->con,$sql);
      if($res){
        return true;
      }
      else{
        return false;
      }
    }
    
    
    
    
    
    
	}
?>