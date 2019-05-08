<html>
<head>
    <title>Formulario en PHP7</title>
</head>

<body>
  
<?php
  require 'conexion.php';
  
  class formulario{
    
    //Se definen las variables y se asignan valores
    public $name = "";
    public $email = "";
    public $matricula = "";
    public $carrera = "";
    public $telefono = "";
    
    public $nameMa = "";
    public $empleado = "";
    public $carreraMa = "";
    public $telefonoMa = "";
    
    public function errores(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
              $this->name = "Name is required";
          } else {
              $this->name = $this->test_input($_POST["name"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z ]*$/",$this->name)) {
                  $this->name = "Only letters and white space allowed";
              }
          }
          
          if (empty($_POST["nameMa"])) {
              $this->nameMa = "Name is required";
          } else {
              $this->nameMa = $this->test_input($_POST["nameMa"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z ]*$/",$this->nameMa)) {
                  $this->nameMa = "Only letters and white space allowed";
              }
          }
          
          if (empty($_POST["email"])) {
              $this->email = "Email is required";
          } else {
              $this->email = $this->test_input($_POST["email"]);
              // check if e-mail address is well-formed
              if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                  $this->email = "Invalid email format";
              }
          }
          
          
          if (empty($_POST["carrera"])) {
              $this->carrera = "Carrera is required";
          } else {
              $this->carrera = $this->test_input($_POST["carrera"]);
              // check if carrera only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z ]*$/",$this->carrera)) {
                  $this->carrera = "Only letters and white space allowed";
              }
          }
          
          if (empty($_POST["carreraMa"])) {
              $this->carreraMa = "Carrera is required";
          } else {
              $this->carreraMa = $this->test_input($_POST["carreraMa"]);
              // check if carrera only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z ]*$/",$this->carreraMa)) {
                  $this->carreraMa = "Only letters and white space allowed";
              }
          }
          
          if (empty($_POST["telefono"])) {
              $this->telefono = "Telefono is required";
          } else {
              $this->telefono = $this->test_input($_POST["telefono"]);
          }
          
          if (empty($_POST["telefonoMa"])) {
              $this->telefonoMa = "Telefono is required";
          } else {
              $this->telefonoMa = $this->test_input($_POST["telefonoMa"]);
          }
          
          
          if (empty($_POST["matricula"])) {
              $this->matricula = "Matricula is required";
          } else {
              $this->matricula = $this->test_input($_POST["matricula"]);
          }
          
          if (empty($_POST["empleado"])) {
              $this->empleado = "Numero de empleado es requerido";
          } else {
              $this->empleado = $this->test_input($_POST["empleado"]);
          }
          
          
          
        }
        
        
      }
    
      public function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    
      public function formularioC(){ ?>
              <h2></h2>
              <p><span class="error">* required field.</span></p>
              <h3>- Alumnos -</h3>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              Matricula: 
              <input type="text" name="matricula" value="<?php echo $this->matricula;?>">
              <span class="error">*</span>
              <br><br>
              Nombre: 
              <input type="text" name="name" value="<?php echo $this->name;?>">
              <span class="error">*</span>
              <br><br>
              Carrera: 
              <input type="text" name="carrera" value="<?php echo $this->carrera;?>">
              <span class="error">*</span>
              <br><br>
              E-mail: 
              <input type="text" name="email" value="<?php echo $this->email;?>">
              <span class="error">*</span>
              <br><br>
              Telefono: 
              <input type="text" name="telefono" value="<?php echo $this->telefono;?>">
              <span class="error">*</span>
              <br><br>
              
              <h3>- Maestro - </h3>
              N° Empleado: 
              <input type="text" name="empleado" value="<?php echo $this->empleado;?>">
              <span class="error">* <?php echo $this->empleado;?></span>
              <br><br>
              Nombre: 
              <input type="text" name="nameMa" value="<?php echo $this->nameMa;?>">
              <span class="error">* <?php echo $this->nameMa;?></span>
              <br><br>
              Carrera: 
              <input type="text" name="carreraMa" value="<?php echo $this->carreraMa;?>">
              <span class="error">* <?php echo $this->carreraMa;?></span>
              <br><br>
              Telefono: 
              <input type="text" name="telefonoMa" value="<?php echo $this->telefonoMa;?>">
              <span class="error">* <?php echo $this->telefonoMa;?></span>
              <br><br>  
              
              <input type="submit" name="submit" value="Submit">
          </form>

      <?php
      }
      
      public function muestraDatos(){
        echo "<h1>Se han ingresado los datos</h1>";
      }
    
    
    
    
    
    
  }
  
  
  
  
  $a = new formulario();
  $a->errores();
  $a->formularioC();
  $a->muestraDatos();
  $insert = "INSERT INTO alumnos (matricula, nombre, carrera, email, telefono) VALUES ('$a->matricula','$a->name','$a->carrera','$a->email','$a->telefono')"; 
  $insertMa = "INSERT INTO maestros (noEmpleado, carrera, nombre, telefono) VALUES ('$a->empleado','$a->carreraMa','$a->nameMa','$a->telefonoMa')"; 
  $resultado = mysqli_query($conexion,$insert);
  $resultado2 = mysqli_query($conexion,$insertMa);
  $a->muestraDatos();
  
  
  
  
?>

</body>
</html>