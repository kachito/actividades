<?php
session_start();
include_once('TipoCollector.php');
//$id = $_POST['ID'];
if (isset($_POST["descripcion"]) && !empty($_POST["descripcion"])) {
  $descripcion = $_POST['descripcion'];
  $TipoCollectorObj = new TipoCollector();
  $TipoCollectorObj->insertTipo($descripcion);
}else{
  echo "N0, descripcion is not set";
}


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
<!--/************************* IFRAME centro **************************************************************-->
<div class="section">
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
            <a href="Tipo_list.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/************************* IFRAME centro **************************************************************-->
</form>
</body>
</html>
