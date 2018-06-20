<?php session_start();
if (isset($_SESSION['usuario'])) {
} else {
  header('Location:../../index.php');
}
include_once("HorarioCollector.php");
$HorarioCollectorObj = new HorarioCollector(); ?>
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
        <li>
          <a href="../../new.php"><i class="fa fa-desktop "></i>Tablero <span class="badge">Included</span></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-edit "></i>Planificación </a>
        </li>
        <li>
          <a href="#"><i class="fa fa-bar-chart-o"></i>Reportes</a>
        </li>
        <li class="active-link">
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
            echo '                   <div class="col-xs-offset-10 ">                   <a type="button" href="form_Horario.php" class="btn btn-primary"> Nuevo </a>   </div> ';
          } ?>         </div>
      </div>
      <hr>

      <hr>


      <div class="row">
        <div class="col-md-12">


          <div class="table-responsive">
            <?php if ($_SESSION['usuario']['descripcion'] == 'Alumno') {
              echo '
        <div class="table-responsive">
      <table class="table table-condensed table-bordered table-hover   table-striped  ">
        <thead>
        <tr>
          <th bgcolor="#D8D8D8">MATERIA</th>
          <th bgcolor="#D8D8D8">DESCRIPCIÓN</th>
          <th bgcolor="#D8D8D8">FECHA ENTREGA</th>
        </tr>
        </thead>';

              $ban = 0;
              foreach ($HorarioCollectorObj->showTareaCurso() as $c) {
                if ($ban == 0) {
                  $fech = $c->getfecha();
                  $ban = 1;
                  echo '<h3> Fecha: ' . $c->getfecha() . ' </h3>';
                }
                if ($fech == $c->getfecha()) {
                  echo '<tbody>
      <tr>
        <td>' . $c->getdescripcion_mat() . '</td>
        <td>' . $c->getdescripcion_ta() . '</td>
        <td>' . $c->getfecha_entrega() . '</td>';
                } else {
                  $ban = 0;
                }
              }
              echo ' </tr>
      </tbody>
      </table>
    </div> ';
            } else {
              echo '
    <div class="table-responsive">
      <table class="table table-condensed table-bordered table-hover">
        <thead>
        <tr align="center">
          <th align="center" bgcolor="#D8D8D8">HORA</th>
          <th align="center" bgcolor="#D8D8D8">INICIO</th>
          <th align="center" bgcolor="#D8D8D8">FIN</th>
          <th align="center" bgcolor="#D8D8D8">ASIGNATURA</th>
          <th align="center" bgcolor="#D8D8D8">CURSO</th>
          <th align="center" bgcolor="#D8D8D8">DESCRIPCIÓN</th>
          <th align="center" bgcolor="#D8D8D8">No. ALUMNOS</th>
          <th align="center" bgcolor="#D8D8D8">OBSERVACIONES</th>
          <th align="center" colspan=3 bgcolor="#D8D8D8">ACCION</th>
        </tr>
        </thead>';
              foreach ($HorarioCollectorObj->showTarea() as $c) {
                echo '
        <tbody>
        <tr>
          <td> 1</td>
          <td> ' . $c->geth_inicio() . ' </td>
          <td>' . $c->geth_fin() . '</td>
          <td>' . $c->getdescripcion_mat() . '</td>
          <td>' . $c->getdescripcion() . ' <i  ></i></td>
          ';
                if ($c->getdescripcion_ta() == '') {
                  echo '<td contenteditable="true">' . $c->getdescripcion_ta() . ' <i  ></i></td>';
                } else {
                  echo '<td>' . $c->getdescripcion_ta() . '</td>';
                }
                echo '
          
          
          <td>' . $c->getfecha_entrega() . '</td>
          <td>14</td>
          <td><a href="Horario_edit.php?id=' . $c->getcod_Tarea() . '"> 
          
          
          
<div class="image-box">
  <div class="overlay-container">
    <img src="images/portfolio/1rob/portfolio-2.jpg" alt="">
    <a class="overlay" data-toggle="modal" data-target="#project-3">
      <i class="fa fa-pencil-square-o"></i>

    </a>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="project-3-label">Matemática</h4>
      </div>
      <div class="modal-body">
        <h3>' . $c->getdescripcion() . '</h3>
        <div class="row">
          <div class="col-md-6">
            
            
            <div class="form-group">
                <label>Fecha: </label>
                    <input type="text" name="curso" id="curso" class="form-control" disabled value="' . $c->getdescripcion() . '"  >
            </div>
            
            <div class="form-group">
                <label>Hora: </label>
                    <input type="text" name="hora" id="hora" class="form-control" disabled value="' . $c->getdescripcion() . '  de ' . $c->getdescripcion() . ' a ' . $c->getdescripcion() . '"  >
                   
            </div>
            <div class="form-group">
                <label>Asignatura: </label>
                    <input type="text" name="materia" id="materia" class="form-control" disabled value="' . $c->getdescripcion() . '"  >
            </div>
            <div class="form-group">
                <label>Curso: </label>
                    <input type="text" name="h_fin" id="h_fin" class="form-control" disabled value="' . $c->getdescripcion() . '"  >
            </div>
            <div class="form-group">
                <label>Curso: </label>
                    <input type="text" name="curso" id="curso" class="form-control" disabled value="' . $c->getdescripcion() . '"  >
            </div>

 
            
            
            
            
            
            
            
          </div>
          <div class="col-md-6">
            
            
            <div class="form-group">
    <label>Planificación: </label>
    <textarea  name="deber" id="deber" class="form-control"  rows="5"> <?php echo $ObjTarea->getdescripcion_ta(); ?></textarea>
  </div>
  <div class="form-group">
    <label>No. Alumnos</label>
    <input type="number" id="fecha_entrega" name="fecha_entrega" class="form-control" value="<?php echo $ObjTarea->getfecha_entrega(); ?>" required="required" >

  </div>
  <div class="form-group">
    <label>Observación: </label>
    <textarea  name="deber" id="deber" class="form-control"  rows="5"> <?php echo $ObjTarea->getdescripcion_ta(); ?></textarea>
  </div>
            
            
            
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal end -->
          
          
          
          </a></td>
          <td><a href="Tarea_edit.php?id=' . $c->getcod_Tarea() . '><i class="  fa fa-check-square-o"></i></a></td>
          <td><a href="Tarea_delete.php?id=' . $c->getcod_Tarea() . '"><i class="fa fa-trash-o"></i></a></td>
        </tr>
        </tbody>';
              }
              echo '</table> ';
            } ?>
          </div>
        </div>


        <hr/><!-- /. ROW  -->


      </div>       <!-- /. ROW  -->
      <hr/>
      <!-- /. ROW  -->     </div>
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


