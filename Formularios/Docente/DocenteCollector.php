<?php
include_once('Docente.php');
include_once('../../db/Collector.php');

class DocenteCollector extends Collector
{
  function showDocente()
  {
    $rows = self::$db->getRows("SELECT cedula,nombre,apellido,telefono,docente_cod,alumno_cod,mail,cod_docente,
                                    curso_cod,usuario_cod,descripcion_mat,titulo,nickname,descripcion 
                                FROM persona   
                                JOIN docente 
                                  ON docente.cod_docente=persona.docente_cod  
                                JOIN usuario
                                  ON usuario.cod_usuario=docente.usuario_cod 
                                JOIN curso 
                                  ON curso.cod_curso=docente.curso_cod 
                                JOIN materia 
                                  ON materia.cod_materia=docente.materia_cod");
    $arrayDocente = array();
    foreach ($rows as $c) {
      $aux = new Docente($c{'cedula'}, $c{'nombre'}, $c{'apellido'}, $c{'telefono'}, $c{'docente_cod'},
        $c{'alumno_cod'}, $c{'mail'}, $c{'descripcion'}, $c{'cod_docente'}, $c{'curso_cod'}, $c{'usuario_cod'},
        $c{'descripcion_mat'}, $c{'titulo'}, $c{'nickname'});
      array_push($arrayDocente, $aux);
    }
    return $arrayDocente;
  }

  function showDocenteId($id)
  {
    $row = self::$db->getRow("SELECT cedula,nombre,apellido,telefono,docente_cod,alumno_cod,mail FROM persona where docente_cod= '$id'");
    $row2 = self::$db->getRow("SELECT cod_docente,curso_cod,usuario_cod,materia_cod,titulo FROM docente where cod_docente= '$id'");
    $id2 = $row2['curso_cod'];
    $row3 = self::$db->getRow("SELECT descripcion FROM curso where cod_curso= '$id2'");
    $id2 = $row2['usuario_cod'];
    $row4 = self::$db->getRow("SELECT nickname FROM usuario where cod_usuario= '$id2'");
    $row5 = self::$db->getRow("SELECT descripcion_mat FROM materia");
    $Docente = new Docente($row{'cedula'}, $row{'nombre'}, $row{'apellido'}, $row{'telefono'}, $row{'docente_cod'},
      $row{'alumno_cod'}, $row{'mail'}, $row3{'descripcion'}, $row2{'cod_docente'}, $row2{'curso_cod'}
      , $row2{'usuario_cod'}, $row5{'descripcion_mat'}, $row2{'titulo'}, $row4{'nickname'});
    return $Docente;
    return 1;
  }

  function updateDocente($id_docente, $nombre, $apellido, $cedula, $telefono, $email1, $titulo, $descripcion_mat, $curso)
  {
    //echo $cargo;
    $update = self::$db->getRow("Update docente set  titulo='$titulo',materia_cod='$descripcion_mat'
      ,curso_cod='$curso' where cod_docente='$id_docente'");
    $update = self::$db->getRow("Update persona set nombre='$nombre',apellido='$apellido',cedula='$cedula',
      telefono='$telefono',mail='$email1' where docente_cod='$id_docente'");
    echo ' <br><br><br><div class="container">
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
                      <h2>Actualización Exitosa</h2>
                    </div>
                  </div>
                </div> <!--/#carousel-slider-->
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="Docente_list.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>';


    return 1;
  }

  function deleteDocente($id)
  {
    $delete = self::$db->getRow("Delete from persona where docente_cod= '$id'");
    $delete = self::$db->getRow("Delete from docente where cod_docente= '$id'");

    echo ' <br><br><br><div class="container">
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
                      <br><br><br><br>
                      <br>
                      <h2>Elimización Exitosa</h2>
                    </div>
                  </div>
                </div> <!--/#carousel-slider-->
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="Docente_list.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>';


    return 1;
  }

  function insertDocente($cedula, $nombre, $apellido, $telefono, $curso, $email1, $titulo, $materia_cod, $usuario,$tipo)
  {

    $password = password_hash($cedula, PASSWORD_BCRYPT);
    $row = self::$db->getRow("SELECT COUNT (cedula) FROM persona where cedula = '$cedula'");

    if ($row['count'] == 0) {
      $row = self::$db->getRow("SELECT COUNT (nickname) FROM usuario where nickname = '$usuario'");

      echo '<br></br>';
      // no existen usuarios con ese nickname
      if ($row["count"] == 0) {
        $new_row = self::$db->getRow("Insert into usuario (nickname,password,tipo_cod) values ('$usuario','$password','$tipo')");
        $row = self::$db->getRow("SELECT * FROM usuario where nickname='$usuario'");
        $id_user = $row['cod_usuario'];
        $new_row = self::$db->getRow("Insert into docente (materia_cod,curso_cod,usuario_cod,titulo) values ('$materia_cod','$curso','$id_user','$titulo')");
        $row = self::$db->getRow("SELECT * FROM docente where usuario_cod='$id_user'");
        $id_user = $row['cod_docente'];
        $new_row = self::$db->getRow("Insert into persona (cedula,nombre,apellido, telefono,mail,docente_cod) values ('$cedula','$nombre','$apellido', '$telefono','$email1','$id_user')");
        echo '<div class="container">
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
                      <h2>El usuario signado es:</h2>
                      <h1>' . $usuario .'</h1>
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
            <a href="form_Docente.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>';
// insertas
      } else {
        $cas = 1;
        $usuario = $usuario . $cas;

        $new_row = self::$db->getRow("Insert into usuario (nickname,password,tipo_cod) values ('$usuario','$password','$tipo')");
        $row = self::$db->getRow("SELECT * FROM usuario where nickname='$usuario'");
        $id_user = $row['cod_usuario'];
        $new_row = self::$db->getRow("Insert into docente (materia_cod,curso_cod,usuario_cod,titulo) values ('$materia_cod','$curso','$id_user','$titulo')");
        $row = self::$db->getRow("SELECT * FROM docente where usuario_cod='$id_user'");
        $id_user = $row['cod_docente'];
        $new_row = self::$db->getRow("Insert into persona (cedula,nombre,apellido, telefono,mail,docente_cod) values ('$cedula','$nombre','$apellido', '$telefono','$email1','$id_user')");



        echo '<div class="container">
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
                      <h2>El usuario signado es:</h2>
                      <h1>' . $usuario . '</h1>
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
            <a href="form_Docente.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>';
// ya existe un registro con ese id
      }
    } else {
      echo '<br>
                      <br>
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
                      <h2>El numero de cedula ya esta registrado</h2>
                      <h1></h1>
                      <br>
                      
                    </div>
                  </div>
                </div> <!--/#carousel-slider-->
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="form_Docente.php">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Retornar</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>';
    }
    /*
    $dbconn = Collector::$db;
    $resultado=pg_query($row,$dbconn ) or die ('La consulta fallo: ');
    if (pg_num_rows($resultado)==0)
    {
      print('Exite al menos un registro');
    } else {
      print('No Existen registros');
    }
        if(count($row)!= 0){
          $cas=1;
          $usuario=$usuario.$cas;
          echo $usuario;
        }
        else{
        echo "hola";
        }
    /*
     *
     *
     *
     *
     * $new_row = self::$db->getRow("Insert into usuario (nickname,password,tipo_cod) values ('$usuario','$password','$tipo')");
       // $a = self::$db->getRow("SELECT cod_curso FROM curso where cod = '$curso'");
        $b = self::$db->getRow("SELECT cod_usuario FROM usuario where nickname = '$usuario'");
        $new_row = self::$db->getRow("Insert into alumno (mail_rep,curso_cod,usuario_cod,dirigencia) values ('$titulo',$curso,$b,'$dirigencia')");
        $c = self::$db->getRow("SELECT cod_alumno FROM alumno where mail = '$titulo'");
        $new_row = self::$db->getRow("Insert into persona (cedula,nombre,apellido, telefono,mail,alumno_cod) values ('$cedula','$nombre','$apellido', '$telefono','$email1','$c')");
        return 1;
        }
        else{
          $cas=1;
          $usuario=$usuario.$cas;
          echo $usuario;
          //header('Location: form_Docente.php');
        if($row==Null){
        echo ('listo');
        }
        else{
          $cas=1;
          $usuario=$usuario.$cas;
          echo $usuario;
          //header('Location: form_Docente.php');
        }*/
  }
}

?>