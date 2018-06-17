<?php
include 'include/config.php';
require_once'include/functions.php';
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="../../css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>

  <header id="header">
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-4">
            <div class="top-number"><p><i class="fa fa-phone-square"></i> Call Us </p></div>
          </div>
          <div class="col-sm-6 col-xs-8">
            <div class="social">
              <ul class="social-share">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
              </ul>
              <div class="search">
                <form role="form">
                  <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                  <i class="fa fa-search"></i>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div><!--/.container-->
    </div><!--/.top-bar-->
    <nav class="navbar navbar-inverse" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="../../images/logo2.png" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.html">Home</a></li>
            <li><a href="about-us - copia.html">About Us</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diario Virtual <i
                  class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="construccion.html">Diario</a></li>
                <li><a href="horario.html">Horario de Clases</a></li>
                <li><a href="construccion.html">Horario de Examenes</a></li>
              </ul>
            </li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Asignaturas <i
                  class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="materias.html">Materia</a></li>
                <li><a href="construccion.html">Cuestionarios</a></li>
                <li><a href="construccion.html">Otros...</a></li>
              </ul>
            </li>
            <!-- target="info"-->
            <li><a href="construccion.html">Calificaciones</a></li>
            <li><a href="construccion.html">Planificaciones</a></li>
            <li><a href="contactenos.html">Contactenos</a></li>
          </ul>
        </div>
      </div><!--/.container-->
    </nav><!--/nav-->
  </header>

    <!-- menu -->
    <div id="menu" class="col-md-12 text-right">
      <div class="container">
          <a class="btn btn-primary" href="lista.php"><i class="fa fa-calendar" aria-hidden="true"></i> Lista de Horarios</a>
          <a class="btn btn-primary" href="index.php"><i class="fa fa-calendar-check-o"></i> Nuevo Horario</a>
      </div>
    </div>
    <!-- menu -->


    <!-- container -->
      <div class="container" >
         <div class="panel panel-info" style="margin-top: 20px;">
           <div class="panel-heading"><i class="fa fa-calendar" aria-hidden="true"></i> Lista de Horarios</div>
           <div class="panel-body nopadding">
                <?php 
                    if (isset($_GET['page'])){
                      horariostable($_GET['page']);
                    }else{
                      horariostable(1);
                    }
                ?>
           </div>
         </div>
      </div>
    <!-- container -->

    <!-- apend data -->
    <div id="appenddata"></div>
    <!-- apend data -->


<!-- append modal set data -->
<div class="modal fade" id="DataEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close canceltask" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-thumb-tack"></i> Agregar Tarea</h4>
      </div>
      <div class="modal-body">
        
        <form id="taskfrm">
           <label>Tarea</label>
           <input class="form-control" type="text" id="nametask" >
           <label>Color:</label>
           <select class="form-control" id="idcolortask">
              <option value="purple-label">Purpura</option>
              <option value="red-label">Rojo</option>
              <option value="blue-label">Azul</option>
              <option value="pink-label">Rosa</option>
              <option value="green-label">Verde</option>
           </select> 
          <input id="tede" type="hidden" name="tede" >
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="savetask btn btn-success"><i class="fa fa-floppy-o"></i> Guardar</button>
        <button type="button" class="canceltask btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!-- append modal set data -->

    <!-- alert danger -->
    <div id="alert-error"><i class="fa fa-times fa-2x"></i></div>
    <!-- alert danger -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- datetimepicker -->
    <script src="js/moment-with-locales.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <!-- validate -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <!-- script -->
    <script src="js/scripts-custom.js"></script>

  </body>
</html>