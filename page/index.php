<?php 

	session_start();
	include "conexion.php.";
	if(isset($_SESSION['usuario'])){
	echo "<script> window.location=""panel.php"; "</script>";
	}



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN USER</title>
	<meta charset="utf-8">
</head>
<body>

	<h1 class="h1" style="color:white">Login</h1>
			<form method="post" action="validar.php">
				<input type="text" class="form-control" name="usuario" autocomplete="off" required><br><br>
				<input type="password" class="form-control" name="contraseña" autocomplete="off" required><br><br>
                <input type="text" class="form-control" name="correo " autocomplete="off" required><br><br>
				<input type="text" class="form-control" name="telefono" autocomplete="off" required><br><br>
				<input type="text" class="form-control" name="dirrecion" autocomplete="off" required><br><br>
				<input type="submit" class="btn btn-success" name="login" value="Entrar">
			</form>


</body>
</html>
