<?php

class Curso
{
    private $cod_curso;
    private $descripcion;
    private $paralelo;


    function __construct($cod_curso,$descripcion,$paralelo)
    {
      $this->cod_curso = $cod_curso;
        $this->descripcion = $descripcion;
        $this->paralelo = $paralelo;


    }
  function setcod_curso($cod_curso)
  {
    $this->cod_curso = $cod_curso;
  }

  function getcod_curso()
  {
    return $this->cod_curso;
  }

    function setdescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    function getdescripcion()
    {
        return $this->descripcion;
    }

    function setparalelo($paralelo)
    {
        $this->paralelo = $paralelo;
    }

    function getparalelo()
    {
        return $this->paralelo;
    }


}

?> 
