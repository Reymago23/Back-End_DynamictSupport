<?php

header( 'Content-Type: text/html; charset=utf-8' );
set_time_limit(200);
ini_set('max_execution_time', 0);

require_once('conexion.php');

/*
* Ejecutar comandos de tipo Delete, Update, Insert
*/
function ejecutarSQLCommand($commando){

  $mysqli = conectar();
  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      printf("Error: %s\n", $mysqli->connect_errno);
      exit();
  }else{

    if ( $mysqli->multi_query($commando)) {
        return true;
    }else{
        return false;
    }
  $mysqli->close();
  }
}


/*
* Metodo para ejecutar consultas de tipo Select
*/
function getSQLResultSet($commando){

	$mysqli = conectar();
	/* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		printf("Error: %s\n", $mysqli->connect_errno);
		exit();
	}else{

		$request = $mysqli->mysqli_query($commando);

		return $request;
	}
	$mysqli->close();
}


?>
