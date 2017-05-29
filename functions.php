


<?php

header( 'Content-Type: text/html; charset=utf-8' );
set_time_limit(200);
ini_set('max_execution_time', 0);

require('conexion.php');

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

function getSQLResultSet($commando){

	$mysqli = conectar();
	/* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		printf("Error: %s\n", $mysqli->connect_errno);
		exit();
	}else{

		$rq = $mysqli->mysqli_query($commando);

		return $rq;
	}
	$mysqli->close();
}


?>
