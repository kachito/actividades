<?php
include_once('Tipo.php');
include_once('../../db/Collector.php');
class TipoCollector extends Collector
{
  function showTipo()
  {
    $rows = self::$db->getRows("SELECT * FROM Tipo ");
    $arrayTipo = array();
    foreach ($rows as $c) {
      $aux = new Tipo($c{'cod_tipo'}, $c{'descripcion'});
      array_push($arrayTipo, $aux);
    }
    return $arrayTipo;
  }
  function showTipoId($id)
  {
    $row = self::$db->getRow("SELECT * FROM Tipo where cod_tipo = '$id'");
    $Tipo = new Tipo($row{'cod_tipo'}, $row{'descripcion'});
    return $Tipo;
  }
  function updateTipo($cod_tipo,$descripcion)
  {
    //echo $cargo;
    $update = self::$db->getRow("Update tipo set descripcion='$descripcion' where cod_tipo='$cod_tipo'");
    return 1;
  }
  function deleteTipo($id)
  {
    $delete = self::$db->getRow("Delete from Tipo where cod_tipo= '$id'");
    return 1;
  }
  function insertTipo($descripcion)
  {
    $new_row = self::$db->getRow("Insert into Tipo (descripcion) values ('$descripcion')");
    return 1;
  }
}
?>
