<?php
class Password
{
  private $password;
  private $cod_usuario;
  private $nickname;
  private $tipo_cod;


  function __construct($cod_usuario,$nickname,$password, $tipo_cod)
  {
    $this->cod_usuario = $cod_usuario;
    $this->nickname=$nickname;
    $this->password = $password;
    $this->tipo_cod = $tipo_cod;



  }
  function setpassword($password)
  {
    $this->password = $password;
  }
  function getpassword()
  {
    return $this->password;
  }
  function setn_password($nickname)
  {
    $this->nickname = $nickname;
  }
  function getnickname()
  {
    return $this->nickname;
  }
  function setcod_usuario($cod_usuario)
  {
    $this->cod_usuario = $cod_usuario;
  }
  function getcod_usuario()
  {
    return $this->cod_usuario;
  }
  function settipo_cod($tipo_cod)
  {
    $this->tipo_cod = $tipo_cod;
  }
  function gettipo_cod()
  {
    return $this->tipo_cod;
  }

}
?>