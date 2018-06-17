<?php

class Tarea
{
  private $cod_tarea;
  private $fecha;
  private $descripcion_mat;
  private $descripcion;
  private $descripcion_ta;
  private $fecha_entrega;

  function __construct($cod_tarea,$fecha,$descripcion_mat, $descripcion,$descripcion_ta,$fecha_entrega)
  {
    $this->cod_tarea = $cod_tarea;
    $this->fecha = $fecha;
    $this->descripcion_mat = $descripcion_mat;
    $this->descripcion = $descripcion;
    $this->descripcion_ta = $descripcion_ta;
    $this->fecha_entrega = $fecha_entrega;
  }

  function setcod_tarea($cod_tarea)
  {
    $this->cod_tarea = $cod_tarea;
  }
  function getcod_tarea()
  {
    return $this->cod_tarea;
  }

  function setfecha($fecha)
  {
    $this->fecha = $fecha;
  }
  function getfecha()
  {
    return $this->fecha;
  }

  function setdescripcion_mat($descripcion_mat)
  {
    $this->descripcion_mat = $descripcion_mat;
  }

  function getdescripcion_mat()
  {
    return $this->descripcion_mat;
  }

  function setdescripcion($descripcion)
  {
    $this->descripcion = $descripcion;
  }

  function getdescripcion()
  {
    return $this->descripcion;
  }

  function setdescripcion_ta($descripcion_ta)
  {
    $this->descripcion_ta = $descripcion_ta;
  }

  function getdescripcion_ta()
  {
    return $this->descripcion_ta;
  }

  function setfecha_entrega($fecha_entrega)
  {
    $this->fecha_entrega = $fecha_entrega;
  }

  function getfecha_entrega()
  {
    return $this->fecha_entrega;
  }



}

?> 
