<?php
session_start();
 include_once('PasswordCollector.php');
 //include_once('Docentep');
$PasswordCollectorObj = new PasswordCollector();



 $cod_usuario = $_POST['cod_usuario'];
 $passwordant = $_POST['passwordant'];
 $newpass = $_POST['newpass'];



$ObjPassword = $PasswordCollectorObj->showPasswordId($cod_usuario);
$password=$ObjPassword->getpassword();


if(password_verify($passwordant,$password)){
  $PasswordCollectorObj = new PasswordCollector();
  $PasswordCollectorObj->updatePassword($cod_usuario,$newpass);
  echo "
<!doctype html>
<html lang=\"es\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0\">
<title>B-Smart</title>
    <!-- Estilos CSS vinculados -->
    <link href=\"../../css/bootstrap.min.css\" rel=\"stylesheet\">

   <h3>Actualizacion Exitosamente</h3>
   </head>
<body>

      <form action=\"../../users/home.php\" method=\"Post\">
         <div>
         <input type=\"submit\" class=\"btn btn-primary\" name=\"Regresar al inicio\" value=\"Retornar\">
         </div>

      </form>
   </body>
</html>
";
}
else{
  echo "
<!doctype html>
<html lang=\"es\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0\">
<title>B-Smart</title>
    <!-- Estilos CSS vinculados -->
    <link href=\"../../css/bootstrap.min.css\" rel=\"stylesheet\">

   <h3>Contraseña incorrecta</h3>
   </head>
<body>

      <form action=\"Password_list.php\" method=\"Post\">
         <div>
         <input type=\"submit\" class=\"btn btn-primary\" name=\"Regresar al inicio\" value=\"Retornar\">
         </div>

      </form>
   </body>
</html>
";

}



//echo  $cargo;




?>