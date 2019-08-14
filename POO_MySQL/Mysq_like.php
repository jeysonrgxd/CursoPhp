<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$host ="localhost";
	$user = "root";
	$pass ="";
	$bd = "prueba";

	 $con = mysqli_connect($host,$user,$pass,$bd);

	if(mysqli_connect_errno()){
		echo "error";
		exit();
	}

	mysqli_set_charset($con,"utf8");

	$consulta = "SELECT * FROM productos WHERE NOMBREARTÍCULO LIKE 'BALON%'";
	$query = mysqli_query($con,$consulta);

	echo "<table border = '1'>
			<tr>
				<th>CÓDIGOARTÍCULO</th>
				<th>SECCIÓN</th>
				<th>NOMBREARTÍCULO</th>
				<th>PRECIO</th>
				<th>FECHA</th>
				<th>IMPORTADO</th>
				<th>PAÍSDEORIGEN</th>
			</tr>";
//mysqli_fetach_array(consulta,parametro) el parametro es el tipo de array que se devlvera
	while($fila = mysqli_fetch_array($query,MYSQL_ASSOC)){?>
	<tr>
		<td><?php echo $fila['CÓDIGOARTÍCULO']; ?> </td>
		<td><?php echo $fila['SECCIÓN']; ?></td>
		<td><?php echo $fila['NOMBREARTÍCULO']; ?></td>
		<td><?php echo $fila['PRECIO']; ?></td>
		<td><?php echo $fila['FECHA']; ?></td>
		<td><?php echo $fila['IMPORTADO']; ?></td>
		<td><?php echo $fila['PAÍSDEORIGEN']; ?></td>
	</tr>
		

<?php } 
	echo "</table>";
	mysqli_close($con);//cerramos la conexion
?> 
</body>
</html>

