<?php
include_once('Sesion.php');
include_once('Collector.php');
session_start();
class SesionCollector extends Collector
{
  function showSesion()
  {
    $rows = self::$db->getRows("SELECT cod_usuario, nickname,password,descripcion FROM usuario 
    JOIN
      tipo 
    ON
      tipo.cod_tipo=usuario.tipo_cod"
  );
    $arraySesion = array();
    foreach ($rows as $c) {
      $aux = new Sesion($c{'cod_usuario'}, $c{'nickname'}, $c{'password'},$c{'descripcion'});
      array_push($arraySesion, $aux);
    }
    return $arraySesion;
  }
  function insertSesion($nickname, $password,$descripcion)
  {
    $new_row = self::$db->getRow("Insert into sesion (id_sesion, usuario, pasw) values ('$nickname','$password','$descripcion')");
    return 1;
  }
}
?>
