<?php
session_start();
$id = $_GET['id'];
// echo $id;
include_once('Tarea.php');
include_once('TareaCollector.php');
$TareaCollectorObj = new TareaCollector();
$ObjTarea = $TareaCollectorObj->showTareaId($id);
include_once('../Materia/MateriaCollector.php');
$MateriaCollectorObj = new MateriaCollector();
include_once('../curso/CursoCollector.php');
$CursoCollectorObj = new CursoCollector();
//print_r($ObjTransportista);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Simple Responsive Admin</title>   <!-- BOOTSTRAP STYLES-->
  <link href="../../assets/css/bootstrap.css" rel="stylesheet"/>   <!-- FONTAWESOME STYLES-->
  <link href="../../assets/css/font-awesome.css" rel="stylesheet"/>   <!-- CUSTOM STYLES-->
  <link href="../../assets/css/custom.css" rel="stylesheet"/>   <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head> <!--/head-->
<body>
<div id="wrapper">
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="adjust-nav">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse"><span
              class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#"> <img src="../../assets/img/logo.png"/> </a></div>
      <span class="logout-spn">                   <a href="#" style="color:#fff;">LOGOUT</a>                 </span>
    </div>
  </div>   <!-- /. NAV TOP  -->
  <nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
      <ul class="nav" id="main-menu">
        <li >
          <a href="../../new.php"><i class="fa fa-desktop "></i>Tablero <span class="badge">Included</span></a>
        </li>
        <li class="active-link">
          <a href="#"><i class="fa fa-edit "></i>Planificación </a>
        </li>
        <li>
          <a href="#"><i class="fa fa-bar-chart-o"></i>Reportes</a>
        </li>
        <li>
          <a href="ui.html"><i class="fa fa-table "></i>Horario <span class="badge">Included</span></a>
        </li>
        <li>
          <a href="blank.html"><i class="fa fa-edit "></i>Blank Page <span class="badge">Included</span></a>
        </li>

      </ul>
    </div>
  </nav>   <!-- /. NAV SIDE  -->
  <div id="page-wrapper">
    <div id="page-inner">
      <div class="row">
        <div class="col-md-12"><h2>BASIC UI ELEMENTS</h2></div>
      </div>       <!-- /. ROW  -->
      <hr>

      <hr>
      <div class="row">
        <div class="col-md-12">           <?php if ($_SESSION['usuario']['descripcion'] != 'Alumno') {
            echo '                   <div class="col-xs-offset-10 ">                   <a type="button" href="form_Tarea.php" class="btn btn-primary"> Nuevo </a>   </div> ';
          } ?>         </div>
      </div>
      <hr>

      <hr>

      <div class="row">
        <div class="col-md-12">
          <section>
            <br>
            <section id="contact-page">
              <div class="container">
                <div class="center">
                  <h2>Tarea</h2>
                  <p class="lead">B-Smart</p>
                </div>
                <div class="row contact-wrap">
                  <div class="status alert alert-success" style="display: none"></div>
                  <form action="Tarea_update.php" method="post" action="form-horizontal">

                    <input type="text" name="cod_tarea" id="cod_tarea" class="form-control" value="<?php echo $ObjTarea->getcod_tarea(); ?>" style="visibility: hidden">

                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <label>Curso: </label>
                        <input type="text" name="curso" id="curso" class="form-control" disabled value="<?php echo $ObjTarea->getdescripcion();?>"  >
                      </div>

                      <div class="form-group">
                        <label>Curso: </label>
                        <input type="text" name="materia" id="materia" class="form-control" disabled value="<?php echo $ObjTarea->getdescripcion_mat();?>"  >
                      </div>

                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>Descripción *</label>
                        <textarea  name="deber" id="deber" class="form-control"  rows="5"> <?php echo $ObjTarea->getdescripcion_ta(); ?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Fecha de entrega *</label>
                        <input type="date" id="fecha_entrega" name="fecha_entrega" class="form-control" value="<?php echo $ObjTarea->getfecha_entrega(); ?>" required="required" >

                      </div>



                    </div>


                    <br>
                    <div class="form-group">
                      <div class="col-xs-offset-4 col-xs-8">
                        <input type="button" value="Regresar" OnClick="history.back()" class="btn btn-primary">
                        <input type="reset" class="btn btn-primary" value="Limpiar">
                        <input type="submit" class="btn btn-primary" value="Actualizar">
                      </div>
                    </div>
                  </form>
                </div><!--/.row-->
              </div><!--/.container-->
            </section>
          </section>

        </div>
      </div>
      <hr>

      <hr>




        <hr/><!-- /. ROW  -->


        <div class="row">
          <div class="col-lg-4 col-md-4"><h5>Panel Sample</h5>
            <div class="panel panel-primary">
              <div class="panel-heading"> Default Panel</div>
              <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt
                  est
                  vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
              </div>
              <div class="panel-footer"> Panel Footer</div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4"><h5>Accordion Sample</h5>
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                                      href="#collapseOne" class="collapsed">Collapsible
                      Group Item #1</a></h4></div>
                <div id="collapseOne" class="panel-collapse collapse"
                ">
                <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                                    href="#collapseTwo">Collapsible Group Item #2</a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                                    href="#collapseThree" class="collapsed">Collapsible
                    Group Item #3</a></h4></div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4"><h5>Tabs Sample</h5>
          <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
            <li class=""><a href="#profile" data-toggle="tab">Profile</a></li>
            <li class=""><a href="#messages" data-toggle="tab">Messages</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade active in" id="home"><h4>Home Tab</h4>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum. Lorem
                ipsum
                dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum. Lorem ipsum dolor sit
                amet, consectetur adipisicing elit eserunt mollit anim id est laborum. </p></div>
            <div class="tab-pane fade" id="profile"><h4>Profile Tab</h4>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum. Lorem
                ipsum
                dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum. Lorem ipsum dolor sit
                amet, consectetur adipisicing elit eserunt mollit anim id est laborum. </p></div>
            <div class="tab-pane fade" id="messages"><h4>Messages Tab</h4>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum. Lorem
                ipsum
                dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum. Lorem ipsum dolor sit
                amet, consectetur adipisicing elit eserunt mollit anim id est laborum. </p></div>
          </div>
        </div>
      </div>       <!-- /. ROW  -->
      <hr/>
      <div class="row">
        <div class="col-lg-12 col-md-12"><h5>Information</h5> This is a type of bare admin that means you can customize
          your own admin using this admin structured template . For More Examples of bootstrap elements or components
          please visit official bootstrap website <a href="http://getbootstrap.com" target="_blank">getbootstrap.com</a>
          .
          And if you want full template please download <a
              href="http://www.binarytheme.com/bootstrap-free-admin-dashboard-template/" target="_blank">FREE BCORE
            ADMIN </a>&nbsp;,&nbsp; <a href="http://www.binarytheme.com/free-bootstrap-admin-template-siminta/"
                                       target="_blank">FREE SIMINTA ADMIN</a> and <a href="http://binarycart.com/"
                                                                                     target="_blank">FREE BINARY
            ADMIN</a>.
        </div>
      </div>       <!-- /. ROW  -->     </div>
  </div>
  <div class="footer">
    <div class="row">
      <div class="col-lg-12"> &copy; 2014 yourdomain.com | Design by: <a href="http://binarytheme.com"
                                                                         style="color:#fff;"
                                                                         target="_blank">www.binarytheme.com</a></div>
    </div>
  </div> <!-- /. WRAPPER  --> <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME--> <!-- JQUERY SCRIPTS -->
  <script src="../../assets/js/jquery-1.10.2.js"></script> <!-- BOOTSTRAP SCRIPTS -->
  <script src="../../assets/js/bootstrap.min.js"></script> <!-- CUSTOM SCRIPTS -->
  <script src="../../assets/js/custom.js"></script>
</body>
</html>























<!DOCTYPE html>
<html lang="en">
<!--/head-->
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
  <br>
  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Tarea</h2>
        <p class="lead">B-Smart</p>
      </div>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <form action="Tarea_update.php" method="post" action="form-horizontal">

          <input type="text" name="cod_tarea" id="cod_tarea" class="form-control" value="<?php echo $ObjTarea->getcod_tarea(); ?>" style="visibility: hidden">

          <div class="col-sm-5 col-sm-offset-1">
              <div class="form-group">
                  <label>Curso: </label>
                  <input type="text" name="curso" id="curso" class="form-control" disabled value="<?php echo $ObjTarea->getdescripcion();?>"  >
              </div>

              <div class="form-group">
                  <label>Curso: </label>
                  <input type="text" name="materia" id="materia" class="form-control" disabled value="<?php echo $ObjTarea->getdescripcion_mat();?>"  >
              </div>

          </div>
          <div class="col-sm-5">
            <div class="form-group">
              <label>Descripción *</label>
              <textarea  name="deber" id="deber" class="form-control" required="required"  rows="5"> <?php echo $ObjTarea->getdescripcion_ta(); ?></textarea>
            </div>
            <div class="form-group">
              <label>Fecha de entrega *</label>
              <input type="date" id="fecha_entrega" name="fecha_entrega" class="form-control" value="<?php echo $ObjTarea->getfecha_entrega(); ?>" required="required" >

            </div>



          </div>


          <br>
          <div class="form-group">
            <div class="col-xs-offset-4 col-xs-8">
              <input type="button" value="Regresar" OnClick="history.back()" class="btn btn-primary">
              <input type="reset" class="btn btn-primary" value="Limpiar">
              <input type="submit" class="btn btn-primary" value="Actualizar">
            </div>
          </div>
        </form>
      </div><!--/.row-->
    </div><!--/.container-->
  </section>
</section>
<!--/************************* IFRAME centro **************************************************************-->
<!--/************************* Foot **************************************************************-->
<!--/#bottom-->
<!--/#footer-->

</body>
</html>