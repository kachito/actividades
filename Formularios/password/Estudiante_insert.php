<?php
 session_start();
 include_once('PasswordCollector.php');
 //$id = $_POST['ID'];
 
 
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $edad = $_POST['edad'];
 $cedula = $_POST['cedula'];
 $genero = $_POST['genero'];
 $email = $_POST['email'];
 
 $EstudianteCollectorObj = new PasswordCollector();
 $EstudianteCollectorObj->insertEstudiante($nombre,$apellido,(int)$edad,(int)$cedula,(int)$genero,$email);

?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>B-Smart</title>
    <!-- Estilos CSS vinculados -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
     
   <h3>Ingresado Exitosamente</h3>
   </head>
<body>
  
      <form action="Password_list.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>
