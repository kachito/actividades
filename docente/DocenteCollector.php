<?php		

include_once('Docente.php');
include_once('Collector.php');

class DocenteCollector extends Collector
{
  
  function showDocente() {
    $rows = self::$db->getRows("SELECT * FROM profesor ");        
    $arrayDocente= array();        
    foreach ($rows as $c){
      $aux = new Tipo($c{'id_profesor'},$c{'nombre'},$c{'apellido'},$c{'edad'},$c{'cedula'},$c{'genero'},$c{'dirigencia'},$c{'cargo'},$c{'email'});

      array_push($arrayDocente, $aux);
    }
    return $arrayDocente;        
  }
 
  function showDocenteId($id) {

    $row = self::$db->getRow("SELECT * FROM profesor where id_profesor = '$id'");   
    
    $Docente = new Tipo($row{'id_profesor'},$row{'nombre'},$row{'apellido'},$row{'edad'},$row{'cedula'},$row{'genero'},$row{'dirigencia'},$row{'cargo'},$row{'email'});
    return $Docente;        
  }


 


  function updateDocente($id_profesor,$nombre,$apellido,$edad,$cedula,$genero,$dirigencia,$cargo,$email) {
	
	//echo $cargo;
    $update = self::$db->getRow("Update profesor set nombre='$nombre',apellido='$apellido',edad='$edad',cedula='$cedula',genero='$genero',dirigencia='$dirigencia',cargo='$cargo',email='$email' where id_profesor='$id_profesor'");             
 return 1;  
  }

  function deleteDocente($id) {

 $delete = self::$db->getRow("Delete from profesor where id_profesor= '$id'");   
   return 1;          
  }

  function insertDocente($nombre,$apellido,$edad,$cedula,$genero,$dirigencia,$cargo,$email) {
    $new_row = self::$db->getRow("Insert into profesor (nombre,apellido,edad,cedula,genero,dirigencia,cargo,email) values ('$nombre','$apellido','$edad','$cedula','$genero','$dirigencia','$cargo','$email')");
 return 1;               
  }



}
?>

