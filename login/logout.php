<?php
session_start();
session_destroy();
header ('Location:../index.php')
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
</head>
<body>
<?php
if (isset($_SESSION['usuario'])) {
  session_destroy();
  echo "Ha cerrado sesion<br/>";
  echo "<a href='../index.php'>Volver</a>";
} else {
  echo "Error<br/>";
  echo "<a href='../index.php'>Volver</a>";
}
?>
</body>
</html>