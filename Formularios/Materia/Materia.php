<?php

class Materia
{
  private $cod_materia;
  private $descripcion_mat;

  function __construct($cod_materia, $descripcion_mat)
  {

    $this->cod_materia = $cod_materia;
    $this->descripcion_mat = $descripcion_mat;


  }
  function setcod_materia($cod_materia)
  {
    $this->cod_materia = $cod_materia;
  }

  function getcod_materia()
  {
    return $this->cod_materia;
  }
  function setdescripcion_mat($descripcion_mat)
  {
    $this->descripcion_mat = $descripcion_mat;
  }

  function getdescripcion_mat()
  {
    return $this->descripcion_mat;
  }




}
