<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$var = $_POST["buscar"];

	$con = mysqli_connect("localhost","root","","prueba");
	mysqli_set_charset($con,"utf8"); 

	if(mysqli_connect_errno()){
		echo "Error de conexion";
		exit();
	}
	$consulta = "SELECT CÓDIGOARTÍCULO,SECCIÓN,NOMBREARTÍCULO,PRECIO,FECHA,IMPORTADO,PAÍSDEORIGEN FROM productos WHERE NOMBREARTÍCULO LIKE '%$var%'";
	$query = mysqli_query($con,$consulta);
	echo " <form action = 'Actualizar.php' method = 'POST'>";
	while($fila = mysqli_fetch_array($query,MYSQL_ASSOC)){ ?>
	<input type="text" value = "<?php echo $fila['CÓDIGOARTÍCULO'] ?> " name="codigo"><br>
	<input type="text" value = "<?php echo $fila['SECCIÓN'] ?>" name="seccion"><br>
	<input type="text" value = "<?php echo $fila['NOMBREARTÍCULO'] ?>" name="nombre"><br>
	<input type="text" value = "<?php echo $fila['PRECIO'] ?>" name="precio"><br>
	<input type="text" value = "<?php echo $fila['FECHA'] ?>" name="fecha"><br>
	<input type="text" value = "<?php echo $fila['IMPORTADO'] ?>" name="importado"><br>
	<input type="text" value = "<?php echo $fila['PAÍSDEORIGEN'] ?>" name="pais"><br>
	<input type="submit" value="Actuliazar" name="actualizar">
	

<?php  
	} 
	echo "</form>";
	mysqli_close($con);
?>
</body>
</html>
