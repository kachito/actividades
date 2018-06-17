<?php

include_once('Tarea.php');
include_once('../../db/Collector.php');

class TareaCollector extends Collector
{
  function showTarea()
  {
    $rows = self::$db->getRows("SELECT cod_tarea,fecha,descripcion_mat,descripcion,descripcion_ta,fecha_entrega FROM tarea   
                                JOIN curso 
                                  ON curso.cod_curso=tarea.curso_cod  
                                JOIN materia
                                  ON materia.cod_materia=tarea.materia_cod");
    $arrayTarea = array();
    foreach ($rows as $c) {
      $aux = new Tarea($c{'cod_tarea'},$c{'fecha'}, $c{'descripcion_mat'}, $c{'descripcion'}, $c{'descripcion_ta'}, $c{'fecha_entrega'});
      array_push($arrayTarea, $aux);
    }
    return $arrayTarea;
  }
  function showTareaCurso()
  {
    $id_curso=$_SESSION['usuario']['cod_usuario'];

    $row2 = self::$db->getRow("SELECT cod_alumno, mail_rep,curso_cod,usuario_cod,representante FROM alumno where usuario_cod= '$id_curso'");

    $id_curso=$row2['curso_cod'];

    $rows = self::$db->getRows("SELECT cod_tarea,fecha,descripcion_mat,descripcion,descripcion_ta,fecha_entrega FROM tarea   
                                JOIN curso 
                                  ON curso.cod_curso=tarea.curso_cod  
                                JOIN materia
                                  ON materia.cod_materia=tarea.materia_cod  where curso_cod='$id_curso'");

    $arrayTarea = array();
    foreach ($rows as $c) {

      $aux = new Tarea($c{'cod_tarea'},$c{'fecha'}, $c{'descripcion_mat'}, $c{'descripcion'}, $c{'descripcion_ta'}, $c{'fecha_entrega'});
      array_push($arrayTarea, $aux);

    }



    return $arrayTarea;
  }

  function showTareaId($id)
  {
    $row = self::$db->getRow("SELECT cod_tarea,fecha,materia_cod,curso_cod,descripcion_ta,fecha_entrega FROM tarea where cod_tarea= '$id'");
    $id2 = $row['materia_cod'];
    $row2 = self::$db->getRow("SELECT descripcion_mat FROM materia where cod_materia= '$id2'");
    $id2 = $row['curso_cod'];
    $row3 = self::$db->getRow("SELECT descripcion FROM curso where cod_curso= '$id2'");
    $Tarea = new Tarea($row{'cod_tarea'}, $row{'fecha'}, $row2{'descripcion_mat'}, $row3{'descripcion'}, $row{'descripcion_ta'},
      $row{'fecha_entrega'});
    return $Tarea;
    return 1;
  }





  function updateTarea($cod_tarea,$descripcion,$descripcion_mat,$descripcion_ta,$fecha_entrega)
  {
    //echo $cargo;
    $update = self::$db->getRow("Update tarea set  curso_cod='$descripcion',materia_cod='$descripcion_mat'
      ,descripcion_ta='$descripcion_ta',fecha_entrega='$fecha_entrega' where cod_tarea='$cod_tarea'");

    echo ' <br><br><br><div class="container">
    <div class="row object-non-visible" data-animation-effect="fadeIn">
      <div class="col-md-12">
        <!-- isotope filters end -->
        <div class="modal-content">
          <div class="modal-body">
            <div class="item">
              <div id="about-slider">
                <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <div class="carousel-inner">
                    <div class="col-md-8 col-sm-6">
                      <img src="../../images/slider/insertar.jpg" class="img-responsive" alt="horario">
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <br>
                      <br>
                      
                      <br>
                      <h2>Actualización Exitosa</h2>
                    </div>
                  </div>
                </div> <!--/#carousel-slider-->
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="Tarea_list.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>';


    return 1;
  }

  function deleteTarea($id)
  {
    $delete = self::$db->getRow("Delete from tarea where cod_tarea= '$id'");

    echo ' <br><br><br><div class="container">
    <div class="row object-non-visible" data-animation-effect="fadeIn">
      <div class="col-md-12">
        <!-- isotope filters end -->
        <div class="modal-content">
          <div class="modal-body">
            <div class="item">
              <div id="about-slider">
                <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <div class="carousel-inner">
                    <div class="col-md-8 col-sm-6">
                      <img src="../../images/slider/insertar.jpg" class="img-responsive" alt="horario">
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <br>
                      <br>
                      <br><br><br><br>
                      <br>
                      <h2>Elimización Exitosa</h2>
                    </div>
                  </div>
                </div> <!--/#carousel-slider-->
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="Tarea_list.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>';


    return 1;
  }

  function insertTarea($curso, $materia, $deber, $fecha_entrega)
  {
    $fecha_act = date('d/m/y');


        $new_row = self::$db->getRow("Insert into tarea (fecha,materia_cod,curso_cod,descripcion_ta,fecha_entrega) values ('$fecha_act','$materia','$curso','$deber','$fecha_entrega')");



        echo '<div class="container">
    <div class="row object-non-visible" data-animation-effect="fadeIn">
      <div class="col-md-12">
        <!-- isotope filters end -->
        <div class="modal-content">
          <div class="modal-body">
            <div class="item">
              <div id="about-slider">
                <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <div class="carousel-inner">
                    <div class="col-md-8 col-sm-6">
                      <img src="../../images/slider/insertar.jpg" class="img-responsive" alt="horario">
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <br>
                      <br>
                      <br>
                      <br>
                      <h2>El usuario signado es:</h2>                     
                      <br>
                      <br>
                      <br>
                      <h2>Ingresado Exitosamente</h2>
                    </div>
                  </div>
                </div> <!--/#carousel-slider-->
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="form_Tarea.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>';
    /*
    $dbconn = Collector::$db;
    $resultado=pg_query($row,$dbconn ) or die ('La consulta fallo: ');
    if (pg_num_rows($resultado)==0)
    {
      print('Exite al menos un registro');
    } else {
      print('No Existen registros');
    }
        if(count($row)!= 0){
          $cas=1;
          $usuario=$usuario.$cas;
          echo $usuario;
        }
        else{
        echo "hola";
        }
    /*
     *
     *
     *
     *
     * $new_row = self::$db->getRow("Insert into usuario (nickname,password,tipo_cod) values ('$usuario','$password','$tipo')");
       // $a = self::$db->getRow("SELECT cod_curso FROM curso where cod = '$curso'");
        $b = self::$db->getRow("SELECT cod_usuario FROM usuario where nickname = '$usuario'");
        $new_row = self::$db->getRow("Insert into alumno (mail_rep,curso_cod,usuario_cod,dirigencia) values ('$titulo',$curso,$b,'$dirigencia')");
        $c = self::$db->getRow("SELECT cod_alumno FROM alumno where mail = '$titulo'");
        $new_row = self::$db->getRow("Insert into persona (cedula,nombre,apellido, telefono,mail,alumno_cod) values ('$cedula','$nombre','$apellido', '$telefono','$email1','$c')");
        return 1;
        }
        else{
          $cas=1;
          $usuario=$usuario.$cas;
          echo $usuario;
          //header('Location: form_Tarea.php');
        if($row==Null){
        echo ('listo');
        }
        else{
          $cas=1;
          $usuario=$usuario.$cas;
          echo $usuario;
          //header('Location: form_Tarea.php');
        }*/
  }
}

?>