<?php

class Docente
{
  private $cedula;
  private $nombre;
  private $apellido;
  private $telefono;
  private $docente_cod;
  private $alumno_cod;
  private $email1;
  private $curso;
  private $cod_docente;
  private $curso_cod;
  private $usuario_cod;
  private $descripcion_mat;
  private $titulo;
  private $usuario;


  function __construct($cedula, $nombre, $apellido, $telefono,$docente_cod,$alumno_cod, $email1 ,$curso,
                       $cod_docente,$curso_cod, $usuario_cod,$descripcion_mat,$titulo, $usuario)
  {
    $this->cedula = $cedula;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->telefono = $telefono;
    $this->docente_cod = $docente_cod;
    $this->alumno_cod = $alumno_cod;
    $this->email1 = $email1;
    $this->curso = $curso;
    $this->cod_docente = $cod_docente;
    $this->curso_cod = $curso_cod;
    $this->usuario_cod = $usuario_cod;
    $this->descripcion_mat = $descripcion_mat;
    $this->titulo = $titulo;
    $this->usuario = $usuario;


  }

  function setcedula($cedula)
  {
    $this->cedula = $cedula;
  }

  function getcedula()
  {
    return $this->cedula;
  }
  function setnombre($nombre)
  {
    $this->nombre = $nombre;
  }

  function getnombre()
  {
    return $this->nombre;
  }

  function setapellido($apellido)
  {
    $this->apellido = $apellido;
  }

  function getapellido()
  {
    return $this->apellido;
  }

  function settelefono($telefono)
  {
    $this->telefono = $telefono;
  }

  function gettelefono()
  {
    return $this->telefono;
  }

  function setdocente_cod($docente_cod)
  {
    $this->docente_cod = $docente_cod;
  }

  function getdocente_cod()
  {
    return $this->docente_cod;
  }

  function setalumno_cod($alumno_cod)
  {
    $this->alumno_cod = $alumno_cod;
  }

  function getalumno_cod()
  {
    return $this->alumno_cod;
  }

  function setemail1($email1)
  {
    $this->email1 = $email1;
  }

  function getemail1()
  {
    return $this->email1;
  }

  function setcurso($curso)
  {
    $this->curso = $curso;
  }

  function getcurso()
  {
    return $this->curso;
  }
  function setcod_docente($cod_docente)
  {
    $this->cod_codente = $cod_docente;
  }

  function getcod_docente()
  {
    return $this->cod_docente;
  }
  function setcurso_cod($curso_cod)
  {
    $this->curso_cod = $curso_cod;
  }

  function getcurso_cod()
  {
    return $this->curso_cod;
  }

  function setusuario_cod($usuario_cod)
  {
    $this->usuario_cod = $usuario_cod;
  }

  function getusuario_cod()
  {
    return $this->usuario_cod;
  }

  function setdescripcion_mat($descripcion_mat)
  {
    $this->descripcion_mat = $descripcion_mat;
  }

  function getdescripcion_mat()
  {
    return $this->descripcion_mat;
  }
  function settitulo($titulo)
  {
    $this->titulo = $titulo;
  }

  function gettitulo()
  {
    return $this->titulo;
  }

  function setusuario($usuario)
  {
    $this->usuario = $usuario;
  }

  function getusuario()
  {
    return $this->usuario;
  }


}

?> 
