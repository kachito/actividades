<?php		

include_once('Estudiante.php');
include_once('Collector.php');

class EstudianteCollector extends Collector
{
  
  function showEstudiante() {
    $rows = self::$db->getRows("SELECT * FROM estudiante ");        
    $arrayEstudiante= array();        
    foreach ($rows as $c){
      $aux = new Docente($c{'id_estudiante'},$c{'nombre'},$c{'apellido'},$c{'edad'},$c{'cedula'},$c{'genero'},$c{'email'});

      array_push($arrayEstudiante, $aux);
    }
    return $arrayEstudiante;        
  }
 
  function showEstudianteId($id) {

    $row = self::$db->getRow("SELECT * FROM estudiante where id_estudiante = '$id'");   
    
    $Estudiante = new Docente($row{'id_estudiante'},$row{'nombre'},$row{'apellido'},$row{'edad'},$row{'cedula'},$row{'genero'},$row{'email'});
    return $Estudiante;        
  }


 
  function updateEstudiante($id_estudiante,$nombre,$apellido,$edad,$cedula,$genero,$email) {
	
	//echo $cargo;
    $update = self::$db->getRow("Update estudiante set nombre='$nombre',apellido='$apellido',edad='$edad',cedula='$cedula',genero='$genero',email='$email' where id_estudiante='$id_estudiante'");             
 return 1;  
  }

  function deleteEstudiante($id) {

 $delete = self::$db->getRow("Delete from estudiante where id_estudiante= '$id'");   
   return 1;          
  }

  function insertEstudiante($nombre,$apellido,$edad,$cedula,$genero,$email) {
    $new_row = self::$db->getRow("Insert into estudiante (nombre,apellido,edad,cedula,genero,email) values ('$nombre','$apellido','$edad','$cedula','$genero','$email')");
 return 1;               
  }



}
?>

