<?php

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$edad = $_REQUEST['edad'];
$telefono = $_REQUEST['telefono'];
$idpuestodepartamento = $_REQUEST['idpuestodepartamento'];

require('functions.php');
header( 'Content-Type: text/html; charset=utf-8' );


$comando = "INSERT INTO Empleado(Nombre, Apellido, Edad, Telefono, IdPuestoDepartamento)";
$comando =  $comando . " VALUES ( '$nombre', '$apellido', '$edad', '$telefono', '$idpuestodepartamento' );";

if(ejecutarSQLCommand($comando)){
  printf("<script>alert('Inserción exitósa!');</script>");
  printf("<script>window.location = '../Front-End_DynamictSupport/admin/empleado.html'</script>");
}else{
  printf("<script>alert('Ocurrió un error!');</script>");
  printf("<script>window.location = '../Front-End_DynamictSupport/admin/empleado.html'</script>");
}

 ?>
