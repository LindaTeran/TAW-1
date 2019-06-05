<?php 

  require_once "controller/controller.php";
  require_once "models/model.php";
  $mvc = new mvcController();
  $mvc->plantilla();
  
/*
gestor de maestros
gestor de alumnos
id de profesor, n de trabajo
id alumno matricula
grupo no se elimina si tiene materias
si se puede quitar materias de un grupo

no se puede eliminar un profesor si tiene una o mas materias
grupo debe tener alumnos para que exista
una materia debe tener maestro para poder agregar a grupo
*/

?>