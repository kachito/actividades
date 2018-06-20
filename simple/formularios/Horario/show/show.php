<?php

include_once('../Tarea.php');
include_once('../../../db/Collector.php');

class TareaCollector extends Collector
{
  function showTarea()
  {
    $rows = self::$db->getRows("SELECT cod_tarea,fecha,descripcion_mat,descripcion,descripcion_ta,fecha_entrega,hora,h_inicio, h_fin FROM tarea 
                                
                                JOIN matexcurso 
                                      ON matexcurso.cod_matxcurso=tarea.matxcur_cod
                                JOIN curso 
                                  ON curso.cod_curso=tarea.curso_cod  
                                  
                                JOIN materia
                                  ON materia.cod_materia=tarea.materia_cod");
    $arrayTarea = array();
    foreach ($rows as $c) {
      $aux = new Tarea($c{'hora'},$c{'h_inicio'},$c{'h_fin'},$c{'cod_tarea'},$c{'fecha'}, $c{'descripcion_mat'}, $c{'descripcion'}, $c{'descripcion_ta'}, $c{'fecha_entrega'});
      array_push($arrayTarea, $aux);
    }
    return $arrayTarea;
  }








}

?>