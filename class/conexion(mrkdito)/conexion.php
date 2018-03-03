<?php 

function conectar(){

	$ID_User="root";
	$pass="";
	$server="localhost";
	$db="MRKDITO";
	$con=mysql_connect($server,$ID_User,$pass) or die ("Error al conectar a la base de datos".mysql_error());
	mysql_select_db($db,$con);

	return $con;
}


 ?>