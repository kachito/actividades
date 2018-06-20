<?php
session_start();

include_once('CursoCollector.php');
include_once('Curso.php');

$id = $_GET['id'];
$CursoCollectorObj = new CursoCollector();
$CursoCollectorObj->deleteCurso($id);
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

