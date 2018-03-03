<?php 

	$conect = @mysql_connect("localhost","root","") or die("no se encontro el servidor");

	mysql_select_db("mrkadito",$conect) or die ("no se encontro la base de datos");

?>
