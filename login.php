<?php

$usuario=$_GET['usuario'];
$contrasenia=$_GET['contrasenia'];

require('functions.php');

$num = 0;
$comando = "SELECT Count(IdUsuario) FROM Usuario WHERE Usuario = '$usuario' AND Contrasenia = '$contrasenia'";

$result = getSQLResultSet($comando);
$num = mysql_fetch_row($result);

if($num[0] > 0)
{
  printf("<script>alert('Bienvenido! $num');</script>");
}else{
  printf("<script>alert('Usuario no valido $num[0] !');</script>");
}

 ?>
