<?php
session_start();
 include_once('CursoCollector.php');
 //include_once('Tipo.php

 $id_curso = $_POST['id_curso'];
 $nombre = $_POST['nombre'];
 $nombre_curso = $_POST['nombre_curso'];
 $descripcion = $_POST['descripcion'];
 $estado = $_POST['estado'];
 

//echo  $cargo;		

 $CursoCollectorObj = new TipoCollector();
 $CursoCollectorObj->updateCurso($id_curso, $nombre, $nombre_curso, $descripcion, $estado);

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
