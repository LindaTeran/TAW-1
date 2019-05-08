<html>
<head>
    <title>Formulario en PHP7</title>
</head>

<body>
<?php
  //incluir 
  require 'conexion.php';
  include "persona.php";
  
  class imc{
    //declaración de variables
    public $edad;
    public $peso;
    public $altura;
    public $imc;
    //funcion de formulario
    public function formulario(){ 
      
      ?>
      <h2></h2>
      <p><span class="error">* Campo requerido.</span></p>
      <h3>- Datos de la persona -</h3>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

      Edad: 
      <input type="text" name="edad" value="<?php echo $this->edad;?>">
      <span class="error">*</span>
      <br><br>

      Peso: 
      <input type="text" name="peso" value="<?php echo $this->peso;?>">
      <span class="error">*</span>
      <br><br>

      Altura: 
      <input type="text" step="0.01" name="altura" value="<?php echo $this->altura;?>">
      <span class="error">*</span>
      <br><br>
      
      <input type="submit" name="submit" value="Enviar">
      
      
  <?php } 
    
    public function validacion(){
      $persona = new persona();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["edad"])) {
              $this->edad = "Edad es requerido";
          } else {
              $this->edad = $this->test_input($_POST["edad"]);
              $persona->setEdad($this->edad);  
          }
          if (empty($_POST["peso"])) {
              $this->peso = "Peso es requerido";
          } else {
              $this->peso = $this->test_input($_POST["peso"]);
              $persona->setPeso($this->peso);  
          }
          if (empty($_POST["altura"])) {
              $this->altura = "Altura es requerido";
          } else {
              $this->altura = $this->test_input($_POST["altura"]);
              $persona->setAltura($this->altura);
              $this->imc = $persona->imc();
              
          } 
        }
      }
    
      public function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    
       public function muestraDatos(){
         $queryD = "SELECT * FROM persona;";
         $resultadoD = mysqli_query($conexion,$queryD) or die('Error al ejecutar la consulta');;
         echo "<table>";
         while($row=$resultadoD->fetch_assoc()) {
            echo "<tr>";
            echo "<td>hola</td>";
            echo "<td>".($row["peso"])."</td>";
            echo "<td>".($row["altura"])."</td>";
            echo "<td>".($row["imc"])."</td>";
            echo "</tr>";

          }
         echo "</table>";
       }
    
    
  }
  
  
  $a = new imc();
  $a->formulario();
  $a->validacion();
  $query = "INSERT INTO persona (edad, peso, altura, imc) VALUES ('$a->edad', '$a->peso', '$a->altura', '$a->imc');";
  $resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');
  $queryD = "SELECT * FROM persona;";
  $resultadoD = mysqli_query($conexion,$queryD) or die('Error al ejecutar la consulta');;
  echo "<br><table>";
  echo "<tr>";
  echo "<td>Edad</td>";
  echo "<td>Peso</td>";
  echo "<td>Altura</td>";
  echo "<td>IMC</td>";
  echo "</tr>";
  while($row=$resultadoD->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".($row["edad"])."</td>";
    echo "<td>".($row["peso"])."</td>";
    echo "<td>".($row["altura"])."</td>";
    echo "<td>".($row["imc"])."</td>";
    echo "</tr>";

  }
  echo "</table>";
  //$a->muestraDatos();
  
  
  ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</body>
</html>