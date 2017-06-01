<?php

$usuario=$_GET['usuario'];
$email=$_GET['email'];
$contrasenia=$_GET['contrasenia'];

header( 'Content-Type: text/html; charset=utf-8' );

require('functions.php');
require_once('settings.php');

$comando = "INSERT INTO  Usuario (Nivel, Correo, Usuario, Contrasenia) VALUES (0, '$email', '$usuario', '$contrasenia')";
if(ejecutarSQLCommand($comando))
{
  printf("<script>alert('Inserción exitósa!');</script>");
  printf("<script>window.location = '$dirFrontEnd/index.php'</script>");
}else{
  printf("<script>alert('Ocurrió un error!');</script>");
  printf("<script>window.location = '$dirFrontEnd/index.php'</script>");
}


 ?>
