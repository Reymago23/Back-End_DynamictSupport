<?php

$usuario=$_REQUEST['usuario'];
$contrasenia=$_REQUEST['contrasenia'];

require('functions.php');
require_once('settings.php');

$num = 0;
$comando = "SELECT Count(IdUsuario) AS Cuenta FROM Usuario WHERE Usuario = '$usuario' AND Contrasenia = '$contrasenia'";

$result = getSQLResultSet($comando);
$num = mysql_fetch_row($result);

if($num[0] > 0)
{
  printf("<script>alert('Bienvenido! $num');</script>");
  printf("<script>window.location = '$dirFrontEnd/index.php'</script>");
}else{
  printf("<script>alert('Usuario no valido $num[0] !');</script>");
  printf("<script>window.location = '$dirFrontEnd/index.php'</script>");
}

 ?>
