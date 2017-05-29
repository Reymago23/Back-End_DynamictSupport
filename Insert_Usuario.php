<?php

$usuario=$_GET['usuario'];
$email=$_GET['email'];
$contrasenia=$_GET['contrasenia'];

require('functions.php');

$comando = "INSERT INTO  Usuario (Nivel, Correo, Usuario, Contrasenia) VALUES (0, '$email', '$usuario', '$contrasenia')";
if(ejecutarSQLCommand($comando))
{
  printf("<script>alert('Inserción exitósa!');</script>");
}else{
  printf("<script>alert('Ocurrió un error!');</script>");
}


 ?>
