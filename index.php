<?php
session_start();
if (isset($_SESSION['usuario'])) {

  header('Location: ./users/home.php ');

} else if (['descripcion'] == "3") {
  header('Location:index.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Educacion">
  <meta name="keywords" content="ESPOL, B-Smart">
  <meta name="author" content="Lenin Yepez">
  <title>B-Smart</title>
  <!-- core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="images/ico/bs1.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="js/ie-emulation-modes-warning.js"></script>
  <link rel="shortcut icon" href="images/ico/bs1.ico">
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
          <h1>El conocimiento es poder. <br> ¡Ármate!</h1>
          <p class="slogan">
            <mark class="gray"> B-Smart</mark>
          </p>
        </div>
       <!-- <a class="home-button page-scroll" href="home.php" target="_top">EMPECEMOS</a>-->
        <a class="home-button page-scroll" href="login.php" target="_top"><i class="fa fa-star"></i>
          LOGIN</a>
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
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>

</body>
</html>
