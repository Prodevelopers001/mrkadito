<?php 

$conexion=mysqli_connect("localhost","root","");
msqli_select_db($conexion,"prueba");

	$resultado=msqli_query($conexion,"SELECT id_user, nombre, contraseña, correo electronico, dirrecion FROM usuario");
  
  while ($fila == mysqli_fetch_array($resultado)) {
  	# code...
  echo "ID: ".$fila¨["id_user"].
  	"<br> NOMBRE: ".$fila["nombre"];
  	"<br> CONTRASEÑA: ".$fila["contraseña"];
  	"<br> CORREO ELECTRONICO: ".$fila["correo electronico"];
  	"<br> DIRRECION: ".$fila["dirrecion"]."<hr>";
  

  }


 ?>