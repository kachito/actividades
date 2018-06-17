<?php
include_once("SesionCollector.php");
$usuario_form = $_POST['usuario'];
$password_form = $_POST['password'];
$SesionCollectorObj = new SesionCollector();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="B-smart es un diario virtual el que permitira a la comunidad educativa tener una buena organizacion,
  que intenta mantenar la comunicacion constante entre: alumno, docente, y representante legal">
  <meta name="keywords" content="ESPOL, B-Smart">
  <meta name="author" content="Lenin Yepez"/>
  <meta name="robots" content="index, follow">
  <link rel="shortcut icon" href="../favicon.png">
  <title>B-Smart</title>
  <!-- Bootstrap Core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="../css/scrolling-nav.css" rel="stylesheet">
  <!-- Animacije -->
  <!-- Font Icons -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- parte 2 -->
  <link href="../css/style.css" rel="stylesheet">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <script src="../js/ie-emulation-modes-warning.js"></script>
  <!-- Custom styles for this template -->
  <link href="../css/carousel.css" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<section id="intro" class="intro-section">
  <!-- Video Background -->
  <video id="video_background" preload="auto" autoplay="autoplay" muted="muted" loop="loop">
    <source src="../video/educacion.mp4" type="video/mp4"/>
  </video>
  <!-- / End Video Start Container -->
  <div class="wow bounceIn" data-wow-delay="0.3s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <?php
          $bandera = 0;
          foreach ($SesionCollectorObj->showSesion() as $c) {
            if ($c->getnickname() == $usuario_form && password_verify($password_form,$c->getpassword()) && $c->getdescripcion() != NULL) {
              $datos = array(
                'cod_usuario'=>$c->getcod_usuario(),
                'nickname' => $c->getnickname(),
                'password' => $c->getpassword(),
                'descripcion' => $c->getdescripcion()
              );
              echo "<h1> Bienvenido:&nbsp $usuario_form </h1>
                      <a class=\"home-button\" href=\"../users/home.php\" data-toggle=\"modal\" data-target=\".bs-example-modal-lg\"><i
                  class=\"fa fa-star\"></i> EMPECEMOS</a>";
              $_SESSION['usuario'] = $datos;
              $bandera = 1;


            }
          }
          if ($bandera == 0) {
             header('Location:../login.php');

             /*  if ($bandera == 0) {
            echo " <h1> Usuario incorrecto!!<br/> </h1>";
            ?>
            <a class="home-button" href="../index.php" data-toggle="modal" data-target=".bs-example-modal-lg"><i
                class="fa fa-star"></i> REGRESAR</a>
            <?php
          }*/
          }
          ?>

        </div>
        <!-- VENTANA MODAL PARA LOGIN -->
        <!-- Modal -->
        <!-- FIN VENTANA MODAL -->
      </div>
    </div>
  </div>
</section>
<!-- Contenedor -->
<!--************************** footer ************************-->
<footer>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<!-- / Contact -->
<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
<!-- Custom JS -->
<script src="js/custom.js"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
    $(document).ready(function () {
        $('#tooltipa').tooltip();
        $('#tooltippic').tooltip();
        $('#tooltipskype').tooltip();
        $('#tooltiplinkedin').tooltip();
        $('#tooltipfacebook').tooltip();
        $('#tooltipgoogle').tooltip();
        $('#tooltipinstagram').tooltip();
    });
</script>
</body>
</html>
