<?php
session_start();

if (isset($_SESSION['usuario'])) {
} else {
  header('Location:../../index.php');
}

 include_once('CursoCollector.php');
 //include_once('Tipo.php

 $curso = $_POST['curso'];
  $descripcion = $_POST['descripcion'];
 $paralelo = $_POST['paralelo'];
 

//echo  $cargo;		

 $CursoCollectorObj = new CursoCollector();
 $CursoCollectorObj->updateCurso($curso, $descripcion, $paralelo);

?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>B-Smart</title>
    <!-- Estilos CSS vinculados -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
   
   <h3>Actualizacion Exitosamente</h3>
   </head>
<body>
  
      <form action="Curso_list.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>
