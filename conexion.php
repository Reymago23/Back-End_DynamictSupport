<?php

header( 'Content-Type: text/html; charset=utf-8' );


//TODO: RETORNA LA CONEXION
function conectar(){

$mysqli = new mysqli("mtechworks.net", "mtechwor_dynamic", "dynamict123.", "mtechwor_dynamict");

  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      printf("Error: %s\n", $mysqli->connect_errno);
      exit();
  }else{

    return $mysqli;
  }

}

 ?>
