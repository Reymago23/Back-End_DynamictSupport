<?php

$IdDispositivo = $_REQUEST['IdDispositivo'];
$Pregunta = $_REQUEST['Pregunta'];
$Descripcion = $_REQUEST['Descripcion'];

require_once('functions.php');



$commando = "INSERT INTO Pregunta(Dispositivo, Nombre, Descripcion) VALUES";
$commando = $commando . "($IdDispositivo, '$Pregunta', '$Descripcion');";

if(ejecutarSQLCommand($commando)){
  printf("<script>alert('Inserción exitósa!');</script>");
  printf("<script>window.location = '../Front-End_DynamictSupport/admin/pregunta.php'</script>");
}else {
  printf("<script>alert('Error de inserción!');</script>");
  printf("<script>window.location = '../Front-End_DynamictSupport/admin/pregunta.php'</script>");
}



 ?>
