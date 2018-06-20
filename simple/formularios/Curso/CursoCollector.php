<?php   

include_once('Curso.php');
include_once('../../db/Collector.php');

class CursoCollector extends Collector
{


function showCurso() {
    $rows = self::$db->getRows("SELECT * FROM curso ");
    $arrayCurso= array();        
    foreach ($rows as $c){
      $aux = new Curso($c{'cod_curso'},$c{'descripcion'},$c{'paralelo'});

      array_push($arrayCurso, $aux);
    }
    return $arrayCurso;        
  }

  function showCursoId($id) {

    $row = self::$db->getRow("SELECT * FROM curso where cod_curso = '$id'");
    $Curso = new Curso($row{'cod_curso'},$row{'descripcion'},$row{'paralelo'},$row{'materia_cod'},$row{'horarios_id'});
    return $Curso;        
  }
 
  function updateCurso($cod_curso,$descripcion, $paralelo) {
  
  //echo $cargo;
    $update = self::$db->getRow("Update curso set descripcion='$descripcion',paralelo='$paralelo' where cod_curso='$cod_curso'");
 return 1;  
  }

  function deleteCurso($id) {

  $row = self::$db->getRow("SELECT COUNT (curso_cod) FROM alumno where curso_cod = '$id'");

  if($row['count']== 0){
    $delete = self::$db->getRow("Delete from matexcurso where curso_cod= '$id'");
    $delete = self::$db->getRow("Delete from curso where cod_curso= '$id'");

    echo '
<br><br><br><br>
<div class="container">

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
                    <img src="../../images/slider/eliminado.jpg" class="img-responsive" alt="horario">

                  </div>

                  <div class="col-md-4 col-sm-6">

                    <br>
                    <br>
                    <br>
                    <br>


                    <br>
                    <br>
                    <br>

                    <h2>Curso Eliminado</h2>
                  </div>

                </div>

              </div> <!--/#carousel-slider-->
            </div>


          </div>
        </div>
        <div class="modal-footer">
          <a href="Curso_list.php">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
';



  }else{
    echo '
<br><br><br><br>
<div class="container">

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
                    <img src="../../images/slider/eliminado.jpg" class="img-responsive" alt="horario">

                  </div>

                  <div class="col-md-4 col-sm-6">

                    <br>
                    <br>
                    <br>
                    <br>


                    <br>
                    <br>
                    <br>

                    <h2>No se puede eliminar el curso porque tiene alumnos</h2>
                  </div>

                </div>

              </div> <!--/#carousel-slider-->
            </div>


          </div>
        </div>
        <div class="modal-footer">
          <a href="Curso_list.php">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
';
  }

   return 1;          
  }

  function insertCurso($descripcion, $paralelo, $id) {
    $new_row = self::$db->getRow("Insert into curso (paralelo,descripcion) values ('$paralelo','$descripcion')");

 return 1;               
  }



}
?>



