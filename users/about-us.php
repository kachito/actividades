<?php
session_start();
if (isset($_SESSION['usuario'])) {
  /*   if($_SESSION['usuario']['descripcion']!='Administrador' && $_SESSION['usuario']['descripcion']!='Alumno' && $_SESSION['usuario']['descripcion']!='Docente' ){
  header('Location:../visit/home.php');
} */
} else {
  header('Location:../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Educacion">
  <meta name="author" content="E-learning">
  <title>B-Smart</title>
  <!-- core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/animate.min.css" rel="stylesheet">
  <link href="../css/prettyPhoto.css" rel="stylesheet">
  <link href="../css/main.css" rel="stylesheet">
  <link href="../css/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="../js/html5shiv.js"></script>
  <script src="../js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="../images/ico/bs1.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body class="homepage">
<header id="header" style=" width: 100%; position: fixed; z-index: 100;">





  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="../index.php"><img src="../images/logo2.png" alt="logo" height="80%"></a>
      </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="../Formularios/Tarea/Tarea_list.php">Diario Virtual</a></li>
          <!--
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diario Virtual <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="../horario.php">Diario</a></li>
              <li><a href="../horario.php">Notificaciones</a></li>
              <li><a href="../horario.php">Horario</a></li>
              <li><a href="../horario.php">Calendario</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Planificaciones <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="../form_docente.php">Anual</a></li>
              <li><a href="../actividades/form_Actividad.php">Bloque</a></li>
              <li><a href="../Formularios/tipo/form_Tipo.php">Semanal</a></li>
            </ul>
          </li> -->

          <?php
          if ($_SESSION['usuario']['descripcion'] == 'Administrador' ) {

            echo '
              <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Herramientas <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="../Formularios/Docente/Docente_list.php">Docente</a></li>
              <li><a href="../Formularios/Estudiante/Estudiante_list.php">Alumno</a></li>
              <li><a href="../Formularios/Curso/Curso_list.php">Curso</a></li>
              <li><a href="../Formularios/Materia/Materia_list.php">Materia</a></li>
              <li><a href="../Formularios/Tarea/Tarea_list.php">Tarea</a></li>
              </ul>
          </li>
            ';
          }
          elseif ($_SESSION['usuario']['descripcion'] == 'Docente' ) {
            echo '
                <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Herramientas <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="../Formularios/Tarea/Tarea_list.php">Tarea</a></li>
                </ul>
          </li>
                ';

          }

          ?>


          <!-- target="info"-->
          <li><a href="../contactenos.php">Contactenos</a></li>

          <li class=" dropdown"  >
            <a href="#" class="dropdown-toggle"  ><div class="fa fa-user-md"></div> <i></i> <?php
              echo $_SESSION['usuario']['nickname'];
              ?></a>
            <ul class="dropdown-menu">

              <li><a href="../login/logout.php"> <div class="fa fa-sign-out"></div>  Cerrar Sesion</a></li>
              <?php

              echo '<li><a href="../Formularios/password/Password_edit.php?id='.$_SESSION['usuario']['cod_usuario'].'">Cambiar Contraseña</a></li>'
              ?>

            </ul>
          </li>
      </div>

      </ul>
    </div>
    </div><!--/.container-->
  </nav><!--/nav-->

  <!--

  <div class="container" style=" width: 100%; position: fixed; z-index: 100" >
    <div class="row" >
      <div class="col-sm-12" >
        <div class=" navbar-right" >
          <li class=" dropdown"  >
            <a href="#" class="dropdown-toggle top-number" style="text-shadow:  1px 1px 2px black, 0 0 25px gainsboro, 0 0 5px grey" ><h2 class="top-number fa fa-user-md"></h2>  <i
              ></i>

              < ?php
              echo $_SESSION['usuario']['nickname'];
              ?>

               </a>
            <ul class="dropdown-menu " style="width: auto; text-align: center;">
              <li><a href="../login/logout.php"><li class="fa fa-sign-out"></li> Cerrar Sesion</a></li>

            </ul>
          </li>

        </div>
      </div>
    </div>
  </div>
  -->

</header><!--/header-->
<!--/************************* IFRAME centro **************************************************************-->

<section id="about-us" >
  <br><br>
  <div class="container" >

    <!-- about us slider -->
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="../images/ariel1.jpg" class="img-responsive" alt="">
          </div>
          <div class="item">
            <img src="../images/ariel2.jpg" class="img-responsive" alt="">
          </div>
          <div class="item">
            <img src="../images/ariel3.jpg" class="img-responsive" alt="">
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>

        <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div> <!--/#carousel-slider-->
    </div><!--/#about-slider-->

        <!-- habilidades -->
    <div class="skill-wrap clearfix">


      <div class="center wow fadeInDown">
        <h2>Mr. Lenin</h2>
        <p class="lead">Mr. Lenin laboró 5 años en la Unidad Educativa <b>"Ciudad de Ariel"</b>, un quimestre en la Unidad Educativa <b>"Juan Pablo II"</b> en los cuales  dictó clases de:  <br> •Matemática   •Computación   •Inglés básico </p>
        <h2>Habilidades</h2>
        <p class="lead">Tiene conocimientos en el campo informático, asi como  <br> en el área de inglés</p>
      </div>

      <div class="row">

        <div class="col-sm-3">
          <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="joomla-skill">
              <p><em>70%</em></p>
              <p>Programación</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="html-skill">
              <p><em>85%</em></p>
              <p>Inglés Basíco</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="css-skill">
              <p><em>60%</em></p>
              <p>CSS</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
            <div class="wp-skill">
              <p><em>90%</em></p>
              <p>Office Básico</p>
            </div>
          </div>
        </div>

      </div>

    </div><!--/.our-skill-->


    <!-- our-team -->
    <div class="team">
      <div class="center wow fadeInDown">
        <h2>Estudios Realizados</h2>
        <p class="lead">La primaria la culmino en la escuela fiscal, "Nidia Jaramillo" <br> Los estudios de  secundaria los termino en el colegio particular "Monseñor Hugolino de Ostia"</p><br> ademas..
      </div>

      <div class="row clearfix">
        <div class="col-md-4 col-sm-6">
          <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
              <div class="pull-left">
                <a href="http://www.espol.edu.ec/" target="_blank"><img class="media-object" src="../images/logo-espol.png" alt=""></a>
              </div>
              <div class="media-body">
                <h4>Estudia </h4>
                <h5>Licenciatura en Sistemas de la Informacion</h5>
                <ul class="tag clearfix">
                  <li class="btn"><a href="http://www.espol.edu.ec/" target="_blank">Web</a></li>
                </ul>
              </div>
            </div><!--/.media -->
            <p>El Ranking Quacquarelli Symonds (QS), califica a la ESPOL entre las Mejores Universidades de América Latina. </p><p>Webometrics en el 2013, ubica a la Espol en el Primer Lugar del Ranking de Universidades Ecuatorianas. En la publicación de Febrero del 2014, se ratifica la ESPOL liderando con el Primer Lugar en dicho Ranking.</p>
          </div>
        </div><!--/.col-lg-4 -->


        <div class="col-md-4 col-sm-6 col-md-offset-2">
          <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
              <div class="pull-left">
                <a href="http://www.espe.edu.ec/portal/portal/main.do?sectionCode=118" target="_blank"><img class="media-object" src="../images/espe.png" alt=""></a>
              </div>
              <div class="media-body">
                <h4>Curso en:</h4>
                <h5>ESPE</h5>
                <ul class="tag clearfix">
                  <li class="btn"><a href="http://www.espe.edu.ec/portal/portal/main.do?sectionCode=118" target="_blank">Web</a></li>

                </ul>

              </div>
            </div><!--/.media -->
            <p>Obteniendo un certificado de AUXILIAR EN COMPUTACIÓN.</p> <p>La Universidad de las Fuerzas Armadas - ESPE (antes llamada Escuela Politécnica del Ejercito) es uno de los Centros de Educación Superior más prestigiosos del Ecuador, el Consejo Nacional de Evaluación y Acreditación de la Educación Superior del Ecuador (CONEA)</p>
          </div>
        </div><!--/.col-lg-4 -->
      </div> <!--/.row -->
      <div class="row team-bar">
        <div class="first-one-arrow hidden-xs">
          <hr>
        </div>
        <div class="first-arrow hidden-xs">
          <hr> <i class="fa fa-angle-up"></i>
        </div>
        <div class="second-arrow hidden-xs">
          <hr> <i class="fa fa-angle-down"></i>
        </div>
        <div class="third-arrow hidden-xs">
          <hr> <i class="fa fa-angle-up"></i>
        </div>
        <div class="fourth-arrow hidden-xs">
          <hr> <i class="fa fa-angle-down"></i>
        </div>
      </div> <!--skill_border-->

      <div class="row clearfix">
        <div class="col-md-4 col-sm-6 col-md-offset-2">
          <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="media">
              <div class="pull-left">
                <a href="https://www.facebook.com/pages/CELC-Computer-and-English-Learning-Courses/1623794451178249?fref=ts" target="_blank"><img class="media-object" src="../images/celc.jpg" alt=""></a>
              </div>

              <div class="media-body">
                <h4>Curso en:</h4>
                <h5>CELC</h5>
                <ul class="social_icons">
                  <li><a href="https://www.facebook.com/pages/CELC-Computer-and-English-Learning-Courses/1623794451178249?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
                </ul>
              </div>
            </div><!--/.media -->
            <p>Obteniendo un certificado de AUXILIAR TÉCNICO EN COMPUTACIÓN..</p><p>CELC (Computer and English Learning Center) es tu centro de capacitación que ofrece cursos de cara al futuro laboral profesional</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-md-offset-2">
          <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="media">

              <div class="media-body">
                <h4>Curso en</h4>
                <h5>Seeds of Knowledge</h5>
              </div>
            </div><!--/.media -->
            <p>EN los que aprobó dos cursos:</p>
            <p><li>TAKE OFF</li> <li>RISE</li></p>
            <p>El primero cuenta con 67 horas de Basic English Course (Curso de Inglés Basico) </p>
            <p>El segundo cuenta con 57 horas de Intermediate English Course (Curso de Inglés Intermedio)</p>

          </div>
        </div>
      </div>	<!--/.row-->
    </div><!--section-->
  </div><!--/.container-->
</section><!--/about-us-->


<!--/************************* IFRAME centro **************************************************************-->
<section id="bottom">
  <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="row">
      <div class="col-md-5 col-sm-6">
        <div class="widget">
          <h3><a href="actividades/Actividad_list.php">Actividades académicas</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-5 col-sm-6">
        <div class="widget">
          <h3><a href="horario.php"> Horarios de Clases</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-2 col-sm-6">
        <div class="widget">
          <h3><a href="curso1/Curso_list.php">Cursos</a></h3>
        </div>
      </div><!--/.col-md-3-->
    </div><!--/.col-md-3-->
  </div>
  </div>
</section><!--/#bottom-->
<footer id="footer" class="midnight-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        &copy; 2015 <a target="_blank" href="http://shapebootstrap.net/"
                       title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>.
        All Rights
        Reserved.
      </div>
      <div class="col-sm-6">
        <ul class="pull-right">
          <li><a href="../home.php">Home</a></li>
          <li><a href="../about-us.php">About Us</a></li>
          <li><a href="../contactenos.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer><!--/#footer-->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.prettyPhoto.js"></script>
<script src="../js/jquery.isotope.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/wow.min.js"></script>
</body>
</html>
