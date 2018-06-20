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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Simple Responsive Admin</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet"/>
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet"/>
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet"/>
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>
<body>
<div id="wrapper">
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="adjust-nav">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img alt="logo" src="assets/img/logo.png"/>
        </a>
      </div>
      <span class="logout-spn">
        <a href="../login/logout.php"style="color:#fff;">  
        LOGOUT  <div class="fa fa-sign-out"></div></a>
      </span>
    </div>
  </div>
  <!-- /. NAV TOP  -->
  <nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
      <ul class="nav" id="main-menu">
        <li class="active-link">
          <a href="#"><i class="fa fa-desktop "></i>Tablero <span class="badge">Included</span></a>
        </li>
        <li>
          <a href="formularios/Tarea/Tarea_list.php"><i class="fa fa-edit "></i>Planificación </a>
        </li>
        <li>
          <a href="#"><i class="fa fa-bar-chart-o"></i>Reportes</a>
        </li>
        <li>
          <a href="formularios/Horario/Horario_list.php"><i class="fa fa-table "></i>Horario <span class="badge">Included</span></a>
        </li>
        <li>
          <a href="blank.html"><i class="fa fa-edit "></i>Blank Page <span class="badge">Included</span></a>
        </li>

      </ul>
    </div>
  </nav>
  <!-- /. NAV SIDE  -->
  <div id="page-wrapper">
    <div id="page-inner">
      <div class="row-name">
        <div class="col-lg-12">
          <h2>TABLERO DE CONTROL</h2>
        </div>
      </div>
      <!-- /. ROW  -->
      <hr/>
      <div class="row-user">
        <div class="col-lg-12 ">
          <div class="alert alert-info">
            <strong>Bienvenido  <?php
              echo $_SESSION['usuario']['nickname'];
              ?> </strong>  <!--You Have No pending Task For Today.-->
          </div>
        </div>
      </div>
      <!-- /. ROW  -->
      <!-- /. ROW  -->
      <div class="row text-center pad-top">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-clipboard fa-5x"></i>
              <h4>All Docs</h4>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-gear fa-5x"></i>
              <h4>Settings</h4>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-wechat fa-5x"></i>
              <h4>Live Talk</h4>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-bell-o fa-5x"></i>
              <h4>Notifications </h4>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-user fa-5x"></i>
              <h4>Registrar Usuario</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- /. ROW  -->
      <div class="row text-center pad-top">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-envelope-o fa-5x"></i>
              <h4>Mail Box</h4>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-rocket fa-5x"></i>
              <h4>Launch</h4>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-users fa-5x"></i>
              <h4>See Users</h4>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-key fa-5x"></i>
              <h4>Admin </h4>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-circle-o-notch fa-5x"></i>
              <h4>Check Data</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- /. ROW  -->
      <div class="row text-center pad-top">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-clipboard fa-5x"></i>
              <h4>Materias</h4>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-gear fa-5x"></i>
              <h4>Settings</h4>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-wechat fa-5x"></i>
              <h4>Live Talk</h4>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-bell-o fa-5x"></i>
              <h4>Notifications </h4>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
          <div class="div-square">
            <a href="blank.html">
              <i class="fa fa-user fa-5x"></i>
              <h4>Register User</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
  </div>
  <!-- /. PAGE WRAPPER  -->
</div>
<div class="footer">
  <div class="row">
    <div class="col-lg-12">
      &copy; 2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
    </div>
  </div>
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>
</html>
