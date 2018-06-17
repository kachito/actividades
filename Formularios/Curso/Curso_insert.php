<?php
error_reporting(0);
 session_start();
 include_once('CursoCollector.php');
 //$id = $_POST['ID'];
 $descripcion = $_POST['curso'];
 $paralelo = $_POST['paralelo'];
 $id=null;

 $CursoCollectorObj = new CursoCollector();
 $CursoCollectorObj->insertCurso($descripcion, $paralelo,$id);




?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <title>B-Smart</title>
  <!-- Estilos CSS vinculados -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
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
                    <img src="../../images/slider/insertar.jpg" class="img-responsive" alt="horario">

                  </div>

                  <div class="col-md-4 col-sm-6">

                    <br>
                    <br>
                    <br>
                    <br>


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
          <a href="form_curso.php">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

