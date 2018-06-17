<?php
session_start();
include_once('TipoCollector.php');
//include_once('Tipo.php
$cod_tipo = $_POST['cod_tipo'];
$descripcion = $_POST['descripcion'];

//echo  $cargo;		
$TipoCollectorObj = new TipoCollector();
$TipoCollectorObj->updateTipo($cod_tipo, $descripcion);
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <title>B-Smart</title>
  <!-- Estilos CSS vinculados -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <h3>Actualizacion Exitosamente</h3>
</head>
<body>
<form action="Tipo_list.php" method="Post">
  <div>
    <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
  </div>
</form>
</body>
</html>
