<?php
session_start();
include_once('DocenteCollector.php');
include_once('Docente.php');
$id = $_GET['id'];
$DocenteCollectorObj = new DocenteCollector();
$DocenteCollectorObj->deleteDocente($id);
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
</html></html>