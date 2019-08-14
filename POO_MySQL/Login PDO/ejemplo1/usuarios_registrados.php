<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		session_start();
		if(!isset($_SESSION["nombre"])){
			header("location:Login.php");
		}else{ ?>
			<h2><?php echo"Bienvenido ". $_SESSION["nombre"]." tu DNI es: ".$_SESSION["dni"]."<br>"."Tu telefono es: ".$_SESSION["telefono"];?></h2>
			<p><a href="cerrar_secion.php">Cerrar sesion</a></p>
			<table>
				<tr>
					<td colspan="3">Menu de navegacion</td>
					
				</tr>
				<tr>
					<td><a href="menu1.php">Opcion1</a></td>
					<td><a href="menu2.php">Opcion2</a></td>
					<td><a href="menu3.php">Opcion3</a></td>
				</tr>
			</table>

		
	<?php } ?>	
	
</body>
</html>