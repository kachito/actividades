<?php
session_start();
if (isset($_SESSION['usuario'])) {
  header('Location: users/home.php ');
} else if (['descripcion'] == "3") {
  header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Proyecto de Programacion Web">
  <meta name="keywords" content="ESPOL, B-Smart">
  <meta name="author" content="Grupo 4"/>
  <meta name="robots" content="index, follow">
  <title>B-Smart</title>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <!-- Animacije -->
  <!-- Font Icons -->
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- parte 2 -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <script src="js/ie-emulation-modes-warning.js"></script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<section id="intro" class="intro-section">
  <!-- Video Background -->
  <video id="video_background" preload="auto" autoplay="autoplay" muted="muted" loop="loop">
    <source src="video/educacion.mp4" type="video/mp4"/>
  </video>
  <!-- / End Video Start Container -->
  <div class="wow bounceIn" data-wow-delay="0.3s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Identifícate. </h1>

          <!-- VENTANA MODAL PARA LOGIN -->
          <!-- Modal -->
                    <div class="modal-body">
            <section class="row mt">
              <div class="container">
                <div class="row fondo-login">
                    <section class="login element-emphasis-strong">
                      <form action="login/datos.php" method="post">
                        <div class="form-group">
                          <label type="text"> <font color="white" > Usuario: </font></label>
                          <input type="text" name="usuario">
                        </div>
                        <div class="form-group">
                          <label for="password"><font color="white" > Contraseña: </font> </label>
                          <input type="password" name="password">
                        </div>
                        <div class="btn_inicio">

                          <button class="login-button" >Iniciar Sesi&oacute;n</button>
                          <button class="login-button" formaction="index.php" >Regresar</button>

                        </div>
                        <div class="clearfix"></div>
                      </form>
                    </section>
                  </div>
              </div>
            </section>
          </div>
          <!-- FIN VENTANA MODAL -->

        </div>
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
