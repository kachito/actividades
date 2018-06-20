<?php		

include_once('Password.php');
include_once('../../db/Collector.php');

class PasswordCollector extends Collector
{
  
  function showPassword() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");
    $arrayPassword= array();
    foreach ($rows as $c){
      $aux = new Password($c{'cod_usuario'},$c{'nickname'},$c{'password'},$c{'tipo_cod'});

      array_push($arrayPassword, $aux);
    }
    return $arrayPassword;
  }
 
  function showPasswordId($id) {

    $row = self::$db->getRow("SELECT * FROM usuario where cod_usuario = '$id'");

    $Password = new Password($row{'cod_usuario'},$row{'nickname'},$row{'password'},$row{'tipo_cod'});
    return $Password;
  }


 
  function updatePassword($cod_usuario,$password) {
    $password=password_hash($password, PASSWORD_BCRYPT);
	
	//echo $cargo;
    $update = self::$db->getRow("Update usuario set password='$password' where cod_usuario='$cod_usuario' ");
 return 1;  
  }

  function deletePassword($id) {

 $delete = self::$db->getRow("Delete from usuario where cod_usuario= '$id'");
   return 1;          
  }

  function insertPassword($nickname,$password,$tipo_cod) {
    $new_row = self::$db->getRow("Insert into usuario (nickname,password,tipo_cod) values ('$nickname','$password','$tipo_cod')");
 return 1;               
  }



}
?>

