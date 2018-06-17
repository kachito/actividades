<?php

class Estudiante
{
    private $id_estudiante;
    private $nombre;
    private $apellido;
    private $edad;
    private $cedula;	
    private $genero;
    private $email;

 
    function __construct($id_estudiante, $nombre,$apellido,$edad,$cedula,$genero,$email) {
       $this->id_estudiante = $id_estudiante;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->edad = $edad;
       $this->cedula = $cedula;
       $this->genero = $genero;
       $this->email = $email;
      

     }

   
     function setid_estudiante($id_estudiante){
       $this->id_estudiante = $id_estudiante;
     }
 
     function getid_estudiante(){
       return $this->id_estudiante;
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

  function setemail($email){
       $this->email = $email;
     } 

     function getemail(){
       return $this->email;
     } 
   
       
 
}

?> 
