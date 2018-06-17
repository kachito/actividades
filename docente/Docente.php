<?php

class Docente
{
    private $id_profesor;
    private $nombre;
    private $apellido;
    private $edad;
    private $cedula;	
    private $genero;
    private $dirigencia;
    private $cargo;
    private $email;

 
    function __construct($id_profesor, $nombre,$apellido,$edad,$cedula,$genero,$dirigencia,$cargo,$email) {
       $this->id_profesor = $id_profesor;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->edad = $edad;
       $this->cedula = $cedula;
       $this->genero = $genero;
       $this->dirigencia = $dirigencia;
       $this->cargo = $cargo;
       $this->email = $email;
      

     }

   
     function setid_profesor($id_profesor){
       $this->id_profesor = $id_profesor;
     }
 
     function getid_profesor(){
       return $this->id_profesor;
     } 

     function setnombre($nombre){
       $this->nombre = $nombre;
     } 

     function getnombre(){
       return $this->nombre;
     } 

   function setapellido($apellido){
       $this->apellido = $apellido;
     } 

     function getapellido(){
       return $this->apellido;
     } 

 function setedad($edad){
       $this->edad = $edad;
     } 

     function getedad(){
       return $this->edad;
     } 

 function setcedula($cedula){
       $this->cedula = $cedula;
     } 

     function getcedula(){
       return $this->cedula;
     } 


   function setgenero($genero){
       $this->genero = $genero;
     } 

     function getgenero(){
       return $this->genero;
     } 

  function setdirigencia($dirigencia){
       $this->dirigencia = $dirigencia;
     } 

     function getdirigencia(){
       return $this->dirigencia;
     }


   function setcargo($cargo){
       $this->cargo = $cargo;
     } 

     function getcargo(){
       return $this->cargo;
     } 


  function setemail($email){
       $this->email = $email;
     } 

     function getemail(){
       return $this->email;
     } 
   
       
 
}

?> 
