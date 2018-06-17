<?php

class Sesion
{

  private $nickname;
  private $password;
  private $descripcion;
  private $cod_usuario;

  function __construct($cod_usuario, $nickname, $password,$descripcion)
  {
    $this->cod_usuario = $cod_usuario;
    $this->nickname = $nickname;
    $this->password = $password;
    $this->descripcion = $descripcion;
  }
  function setcod_usuario($cod_usuario)
  {
    $this->cod_usuario = $cod_usuario;
  }

  function getcod_usuario()
  {
    return $this->cod_usuario;
  }


  function setnickname($nickname)
  {
    $this->nickname = $nickname;
  }

  function getnickname()
  {
    return $this->nickname;
  }

  function setpassword($password)
  {
    $this->password = $password;
  }

  function getpassword()
  {
    return $this->password;
  }
  function setdescripcion($descripcion)
  {
    $this->descripcion = $descripcion;
  }

  function getdescripcion()
  {
    return $this->descripcion;
  }
}

?>