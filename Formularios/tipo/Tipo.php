<?php
class Tipo
{
  private $cod_tipo;
  private $descripcion;
  function __construct($cod_tipo, $descripcion)
  {
    $this->cod_tipo = $cod_tipo;
    $this->descripcion = $descripcion;
  }
  function setcod_tipo($cod_tipo)
  {
    $this->cod_tipo = $cod_tipo;
  }
  function getcod_tipo()
  {
    return $this->cod_tipo;
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
