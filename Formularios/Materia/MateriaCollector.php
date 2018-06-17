<?php
include_once('Materia.php');
include_once('../../db/Collector.php');
class MateriaCollector extends Collector
{
  function showMateria()
  {
    $rows = self::$db->getRows("SELECT * FROM materia ");
    $arrayMateria = array();
    foreach ($rows as $c) {
      $aux = new Materia( $c{'cod_materia'},$c{'descripcion_mat'});
      array_push($arrayMateria, $aux);
    }
    return $arrayMateria;
  }
  function showMateriaId($id)
  {
    $row = self::$db->getRow("SELECT * FROM materia where cod_materia = '$id'");
    $Materia = new Materia($row{'cod_materia'}, $row{'descripcion_mat'});
    return $Materia;
  }
  function updateMateria( $cod_materia,$descripcion_mat, $elec_array)
  {
    //echo $cargo;
    $update = self::$db->getRow("Update materia set descripcion_mat='$descripcion_mat' where cod_materia='$cod_materia'");


    $delete = self::$db->getRow("Delete from matexcurso where materia_cod= '$cod_materia'");

    foreach ($elec_array as $c){
      $new_row = self::$db->getRow("Insert into matexcurso (materia_cod,curso_cod) values ('$cod_materia','$c')");
    }

    return 1;
  }
  function deleteMateria($id)

  {
    $delete = self::$db->getRow("Delete from matexcurso where materia_cod= '$id'");
    $delete = self::$db->getRow("Delete from materia where cod_materia= '$id'");
    return 1;
  }
  function insertMateria($descripcion_mat, $elec_array)
  {
    $new_row = self::$db->getRow("Insert into materia (descripcion_mat) values ('$descripcion_mat')");
    $row = self::$db->getRow("SELECT * FROM materia where descripcion_mat='$descripcion_mat'");
    $id_mate=$row['cod_materia'];
    foreach ($elec_array as $c){
      $new_row = self::$db->getRow("Insert into matexcurso (materia_cod,curso_cod) values ('$id_mate','$c')");
    }

//insertar
      /* $consulta = "insert into publicacion(metodo)
 values ( '$elec_array' )";
       $result = mysql_query($consulta, $conexion);
     }
 //validacion
     if ($result) {
      echo "Se ingreso correctamente la informaicon del checkbox $";
      $row = self::$db->getRow("SELECT * FROM materia where descripcion_mat='Ciencias Naturales'");
      $id_user = $row['cod_materia'];
      foreach ($elec_array as $value) {
        print $value;
      }
    /*
     $row = self::$db->getRow("SELECT * FROM materia where descripcion_mat='Ciencias Naturales'");
     $id_user=$row['cod_materia'];
     $new_row = self::$db->getRow("Insert into matexcurso (materia_cod,curso_cod) values ('$id_user','$selec_array')");
     foreach ($selec_array as $valor) {
       $new_row = self::$db->getRow("Insert into matexcurso (materia_cod,curso_cod) values ('$id_user','$selec_array[$valor]')");
     }
 */
    return 1;
  }
}
?>
