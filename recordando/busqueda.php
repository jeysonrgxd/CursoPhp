<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		$server =  $_SERVER["PHP_SELF"];
		if (isset($_POST["boton"])) {
			try {
				$nombre =$_POST["busqueda"];

				$conexion = new PDO("mysql:host=localhost; dbname=prueba","root","");
				$conexion->exec("SET CHARACTER SET utf8");
				$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$consulta = "SELECT * FROM usuarios WHERE nombre = ? ";
				$PDOstame = $conexion->prepare($consulta);
				$ok=$PDOstame->execute(array($nombre));
				echo "<table alig = 'center' border = '1'>
						<tr>
							<th>dni</th>
							<th>nombre</th>
							<th>telefono</th>
							<th>usuario</th>
							<th>contrasena</th>
						</tr>";
				while($fila = $PDOstame->fetch(PDO::FETCH_BOTH)){?>

						<tr>
							<td><?php echo $fila["dni"]; ?> </td>
							<td><?php echo $fila["nombre"]; ?></td>
							<td><?php echo $fila["telefono"]; ?></td>
							<td><?php echo $fila["usuario"]; ?></td>
							<td><?php echo $fila["contrasena"]; ?></td>
						</tr>

				<?php } 
				echo "</table>";
				$PDOstame->closeCursor();
						
			} catch (Exception $e) {
				
				die( "Error en la linea ".$e->getLine()."<br> El codigo de la linea ".$e->getCode());


			}
		} else {?>
			<h2 align="center">Busqueda de usuario</h2>
			<form action="<?php echo $server; ?>" method="POST">
				<table align="center"> 
					<tr>
						<td><label for="nombre">Nombre</label></td>
						<td><input type="text" id="nombre" name="busqueda"></td>
					</tr>
					<tr align="center">
						<td colspan="2"><input type="submit" name="boton" value="Aceptar"></td>
					</tr>
				</table>
			</form>
		<?php } ?>
		

	 

</body>
</html>