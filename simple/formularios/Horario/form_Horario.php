<?php
session_start();
include_once('Tarea.php');
include_once('TareaCollector.php');

if (isset($_SESSION['usuario'])) {
} else {
  header('Location:../../index.php');
}


$TareaCollectorObj = new TareaCollector();

include_once('../Materia/MateriaCollector.php');
$MateriaCollectorObj = new MateriaCollector();

include_once('../curso/CursoCollector.php');
$CursoCollectorObj = new CursoCollector();

include_once('../password/PasswordCollector.php');
$PasswordCollectorObj = new PasswordCollector();

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
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../css/font-awesome.min.css" rel="stylesheet">
  <link href="../../css/animate.min.css" rel="stylesheet">
  <link href="../../css/prettyPhoto.css" rel="stylesheet">
  <link href="../../css/main.css" rel="stylesheet">
  <link href="../../css/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="../../js/html5shiv.js"></script>
  <script src="../../js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="../../images/ico/bs1.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../../images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body class="homepage">
<header id="header" style=" width: 100%; position: fixed; z-index: 100;">
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="../../index.php"><img src="../../images/logo2.png" alt="logo" height="80%"></a>
      </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../../users/home.php">Home</a></li>
          <li><a href="../../users/about-us.php">About Us</a></li>
          <li><a href="../Tarea/Tarea_list.php">Diario Virtual</a></li>
          <?php
          if ($_SESSION['usuario']['descripcion'] == 'Administrador') {
            echo '
              <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Herramientas <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="../Docente/Docente_list.php">Docente</a></li>
              <li><a href="../Estudiante/Estudiante_list.php">Alumno</a></li>
              <li><a href="../Curso/Curso_list.php">Curso</a></li>
              <li><a href="../Materia/Materia_list.php">Materia</a></li>
              <li><a href="../Tarea/Tarea_list.php">Tarea</a></li>
              </ul>
          </li>
            ';
          } elseif ($_SESSION['usuario']['descripcion'] == 'Docente') {
            echo '
                <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Herramientas <i
                class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="../Tarea/Tarea_list.php">Tarea</a></li>
                </ul>
          </li>
                ';
          }
          ?>
          <!-- target="info"-->
          <li><a href="../../contactenos.php">Contactenos</a></li>
          <li class=" dropdown">
            <a href="#" class="dropdown-toggle">
              <div class="fa fa-user-md"></div>
              <i></i> <?php
              echo $_SESSION['usuario']['nickname'];
              ?></a>
            <ul class="dropdown-menu">
              <li><a href="../../login/logout.php">
                  <div class="fa fa-sign-out"></div>
                  Cerrar Sesion</a></li>
              <?php
              echo '<li><a href="../password/Password_edit.php?id=' . $_SESSION['usuario']['cod_usuario'] . '">Cambiar Contraseña</a></li>'
              ?>
            </ul>
          </li>
      </div>
      </ul>
    </div>
    </div><!--/.container-->
  </nav><!--/nav-->
</header><!--/header-->
<!--/************************* IFRAME centro *************************************************************-->
<section>
  <br><br>
  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Tarea</h2>
        <p class="lead">B-Smart</p>
      </div>

      <div class="col-xs-offset-10 ">
        <a type="button" href="Tarea_list.php" class="btn btn-primary"> Mostar Tareas </a>
      </div>

      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <form action="Tarea_insert.php" method="post" action="form-horizontal">
          <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
              <label>Curso: *</label>
              <select class="form-control" typeof="checkbox" name="curso">

                <?php
                foreach ($CursoCollectorObj->showCurso() as $c) {
                  echo '<option value=' . $c->getcod_curso() . '>';
                  echo $c->getdescripcion();
                  echo '</option>';
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Materia a dictar: *</label>
              <select class="form-control" typeof="checkbox" name="materia">

                <?php
                foreach ($MateriaCollectorObj->showMateria() as $c) {
                  echo '<option value=' . $c->getcod_materia() . '>';
                  echo $c->getdescripcion_mat();
                  echo '</option>';
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group">
              <label>Descripción *</label>
              <textarea  name="deber" id="deber" class="form-control" required="required" rows="5"> </textarea>
            </div>
            <div class="form-group">
              <label>Fecha de entrega *</label>
              <input type="date" id="fecha_entrega" name="fecha_entrega" class="form-control" required="required" >

            </div>



          </div>

          <div class="form-group">
            <div class="col-xs-offset-4 col-xs-8">
              <input type="button" value="Regresar" OnClick="history.back()" class="btn btn-primary">
              <input type="reset" class="btn btn-primary" value="Limpiar">
              <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
          </div>


        </form>

      </div><!--/.row-->
    </div>
    <!--/.container-->
  </section>
</section>

<!--/#contact-page-->
<!--/************************* IFRAME centro **************************************************************-->
<!--/************************* Foot **************************************************************-->
<section id="bottom">
  <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3><a href="#">Actividades académicas</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3><a href="#">Calendario académico</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3><a href="#">Nuevos cursos</a></h3>
        </div>
      </div><!--/.col-md-3-->
      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3><a href="#">Anuncios de profesores</a></h3>
        </div>
      </div><!--/.col-md-3-->
    </div>
  </div>
</section><!--/#bottom-->
<footer id="footer" class="midnight-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        &copy; 2015 <a target="_blank" href="http://shapebootstrap.net/"
                       title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights
        Reserved.
      </div>
      <div class="col-sm-6">
        <ul class="pull-right">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Faq</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer><!--/#footer-->
<script src="js/datos.js"></script>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/jquery.prettyPhoto.js"></script>
<script src="../../js/jquery.isotope.min.js"></script>
<script src="../../js/main.js"></script>
<script src="../../js/wow.min.js"></script>
</body>
</html>