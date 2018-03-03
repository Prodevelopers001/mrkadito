<?php 

session_start();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Validando...</title>
 </head>
 <body>
 
		<?php
			include "conexion.php";
			if(isset($_POST['login'])){
				$usuario = $_POST['usuario'];
				$contraseña = $_POST['contraseña '];
				$correo = $_POST['correo '];
				$telefono = $_POST['telefono '];
				$dirrecion = $_POST['dirrecion '];
				$log = mysql_query("SELECT * FROM usuario WHERE usuario='$usuario' AND contraseña='$contraseña' AND correo='$correo'AND telefono='$telefono'AND dirrecion='$dirrecion' ");
				if (mysql_num_rows($log)>0) { 
					$row = mysql_fetch_array($log);
					$_SESSION["usuario"] = $row['usuario']; 
				  	echo 'Iniciando sesión para '.$_SESSION['usuario'].' <p>';
					echo '<script> window.location="panel.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña o correo incorrectos.");</script>';
					echo '<script> window.location="index.php"; </script>';
				}
			}
		?>	
 </body>
 </html>
