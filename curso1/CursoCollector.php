<?php   

include_once('Curso.php');
include_once('../db/Collector.php');

class CursoCollector extends Collector
{
  



function showCurso() {
    $rows = self::$db->getRows("SELECT * FROM curso ");        
    $arrayCurso= array();        
    foreach ($rows as $c){
      $aux = new Curso($c{'cod_curso'},$c{'descripcion'},$c{'paralelo'},$c{'materia_cod'},$c{'horarios_id'});

      array_push($arrayCurso, $aux);
    }
    return $arrayCurso;        
  }

  function showCursoId($id) {

    $row = self::$db->getRow("SELECT * FROM curso where cod_curso = '$id'");
    
    $Curso = new Curso($row{'cod_curso'},$row{'paralelo'},$row{'materia_cod'},$row{'descripcion'},$row{'horarios_id'});
    return $Curso;        
  }




 
  function updateCurso($cod_curso, $paralelo, $materia_cod, $descripcion, $horarios_id) {
  
  //echo $cargo;
    $update = self::$db->getRow("Update curso set paralelo='$paralelo', materia_cod='$materia_cod,'descripcion='$descripcion',horarios_id='$horarios_id', where cod_curso='$cod_curso'");
 return 1;  
  }

  function deleteCurso($id) {

 $delete = self::$db->getRow("Delete from curso where cod_curso= '$id'");
   return 1;          
  }

  function insertCurso($paralelo, $materia_cod, $descripcion, $horarios_id) {
    $new_row = self::$db->getRow("Insert into Curso (paralelo, materia_cod, descripcion, horarios_id) values ('$paralelo','$materia_cod','$descripcion','$horarios_id')");
 return 1;               
  }



}
?>



