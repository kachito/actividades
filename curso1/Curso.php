<?php

class Curso
{
    private $cod_curso;
    private $paralelo;
    private $descripcion;
    private $materia_cod;
    private $horario_id;


    function __construct($cod_curso, $descripcion, $paralelo,  $materia_cod,$horario_id)
    {
        $this->cod_curso = $cod_curso;
        $this->paralelo = $paralelo;
        $this->descripcion = $descripcion;
        $this->materia_cod = $materia_cod;
        $this->horario_id = $horario_id;


    }


    function setcod_curso($cod_curso)
    {
        $this->cod_curso = $cod_curso;
    }

    function getcod_curso()
    {
        return $this->cod_curso;
    }

    function setparalelo($paralelo)
    {
        $this->paralelo = $paralelo;
    }

    function getparalelo()
    {
        return $this->paralelo;
    }




    function setdescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    function getdescripcion()
    {
        return $this->descripcion;
    }

    function setmateria_cod($materia_cod)
    {
        $this->materia_cod = $materia_cod;
    }

    function getmateria_cod()
    {
        return $this->materia_cod;
    }

  function sethorario_id($horario_id)
  {
    $this->horario_id = $horario_id;
  }

  function gethorario_id()
  {
    return $this->horario_id;
  }




}

?> 
