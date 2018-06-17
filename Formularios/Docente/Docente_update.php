<?php
session_start();
include_once('DocenteCollector.php');
//include_once('Estudiante.php');

$id_docente = $_POST['id_docente'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$email1 = $_POST['email1'];
$titulo = $_POST['titulo'];
$descripcion_mat = $_POST['descripcion_mat'];
$curso = $_POST['curso'];

//echo  $cargo;



$DocenteCollectorObj = new DocenteCollector();
$DocenteCollectorObj->updateDocente($id_docente,$nombre,$apellido,(int)$cedula,(int)$telefono,$email1,$titulo,$descripcion_mat,$curso);

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <title>B-Smart</title>
  <!-- Estilos CSS vinculados -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


</body>
</html>
