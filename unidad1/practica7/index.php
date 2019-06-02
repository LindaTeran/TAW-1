<?php

require_once "models/enlaces.php";
require_once "models/crud.php";
require_once "controllers/controller.php";

$mvc = new MvcController();
$mvc -> pagina();

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