<?php
session_start();
include_once('TareaCollector.php');
//$id = $_POST['ID'];

$curso = $_POST['curso'];
$materia = $_POST['materia'];
$deber = $_POST['deber'];
$fecha_entrega = $_POST['fecha_entrega'];
$TareaCollectorObj = new TareaCollector();
$TareaCollectorObj->insertTarea($curso, $materia, $deber, $fecha_entrega);
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

<!--/************************* IFRAME centro **************************************************************-->




<!--/************************* IFRAME centro **************************************************************-->

</form>
</body>
</html>