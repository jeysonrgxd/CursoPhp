<?php 
	require 'transaccion_usuarios.php';
	$base = new Transaccion();
	$resultado = $base->registro();

	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Registro de usuarios</h2>
	<table border="1">
		<tr>
			<th>DNI</th>
			<th>NOMBRE</th>
			<th>TELEFONO</th>
			<th>USUARIO</th>
			<th>CONTRASEÑA</th>
		</tr>
		<?php 
			// foreach($resultado as $fila){
			// 	echo "<tr>";
			// 	foreach($fila as $codigo => $valor){
			// 		echo "<td>".$valor."</td>";

			// 	}
			// 	echo "<tr>";


			// }
			foreach($resultado as $fila => $valor){ ?>
			<tr>
				<td><?php echo $valor["dni"]; ?></td>
				<td><?php echo $valor["nombre"]; ?></td>
				<td><?php echo $valor["telefono"]; ?></td>
				<td><?php echo $valor["usuario"]; ?></td>
				<td><?php echo $valor["contrasena"]; ?></td>
			</tr>
				
		<?php } ?>	
			
			
		
	</table>
</body>
</html>