<?php
session_start();
include_once('TareaCollector.php');
//include_once('Estudiante.php');

$cod_tarea = $_POST['cod_tarea'];
$curso = $_POST['curso'];
$materia = $_POST['materia'];
$deber = $_POST['deber'];
$fecha_entrega = $_POST['fecha_entrega'];

//echo  $cargo;



$TareaCollectorObj = new TareaCollector();
$TareaCollectorObj->updateTarea($cod_tarea,$curso,$materia,$deber,$fecha_entrega);

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
