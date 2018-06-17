<?php
session_start();
 include_once('DocenteCollector.php');
 //include_once('Tipop');

 $id_profesor = $_POST['id_profesor'];
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $edad = $_POST['edad'];
 $cedula = $_POST['cedula'];
 $genero = $_POST['genero'];
 $dirigencia = $_POST['dirigencia'];
 $cargo = $_POST['cargo'];
 $email = $_POST['email'];

//echo  $cargo;		

 $DocenteCollectorObj = new DocenteCollector();
 $DocenteCollectorObj->updateDocente($id_profesor,$nombre,$apellido,(int)$edad,(int)$cedula,(int)$genero,$dirigencia,$cargo,$email);

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
  
      <form action="Docente_list.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>
