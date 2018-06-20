<?php
include_once("SesionCollector.php");
$usuario_form = $_POST['usuario'];
$password_form = $_POST['password'];
$SesionCollectorObj = new SesionCollector();




          $bandera = 0;
          foreach ($SesionCollectorObj->showSesion() as $c) {
            if ($c->getnickname() == $usuario_form && password_verify($password_form,$c->getpassword()) && $c->getdescripcion() != NULL) {
              $datos = array(
                'cod_usuario'=>$c->getcod_usuario(),
                'nickname' => $c->getnickname(),
                'password' => $c->getpassword(),
                'descripcion' => $c->getdescripcion()
              );

              $_SESSION['usuario'] = $datos;
              $bandera = 1;

              if (isset($_SESSION['usuario'])) {
                header('Location: ../simple/new.php ');
              }


            }
          }
          if ($bandera == 0) {
             header('Location:../login.php');

          }













?>