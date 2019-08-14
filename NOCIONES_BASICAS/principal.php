<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercico</title>
</head>
<style>
	h2{
		color: red;

	}
</style>
<body>
	
	<?php 
		if (isset($_POST["ok"])) {
			$nombre = $_POST["nombre"];
			$apellido = $_POST["apellido"];
			echo "el nombre es: $nombre <br> su apellido $apellido";
		}else{?>

		<h2>REGISTRO DE ESTUDIANTES</h2>
	<form action="" method="POST">
		 <table border="1">
		 	<tr>
		 		<td>Nombre:</td>
		 		<td><input type="text" name="nombre"></td>
		 	</tr>
		 	<tr>
		 		<td>Apellido:</td>
		 		<td><input type="text" name="apellido"></td>
		 	</tr>
		 	<tr>
		 		<td>Edad:</td>
		 		<td><input type="text" name = "edad"></td>
		 	</tr>
		 	<tr>
		 		<td>Contrato:</td>
		 		<td><input type="text" name = "tiempo"></td>
		 	</tr>
		 	<tr>
		 		<td colspan="2"> <input type="submit" value="Aceptar" name="ok"> </td>
		 		
		 	</tr>
		 </table>
	</form>
	<?php } ?>
	 

	
</body>
</html>