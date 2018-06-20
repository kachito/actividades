<?php
session_start();
 include_once('MateriaCollector.php');
 //include_once('Tipo.php


$descripcion = $_POST['descripcion'];
$cod_materia = $_POST['cod_materia'];
$elec_array=$_POST['elec'] ;

$elec_array=array_keys($elec_array);



$MateriaCollectorObj = new MateriaCollector();
$MateriaCollectorObj->updateMateria($cod_materia,$descripcion, $elec_array);



//echo  $cargo;		

?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>B-Smart</title>
    <!-- Estilos CSS vinculados -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
   
   <h3>Actualización Exitosamente</h3>
   </head>
<body>
  
      <form action="Materia_list.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>
