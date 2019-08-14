<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>busqueda</title>
</head>
<?php 
	function busqueda_mysql($var){
		$con = mysqli_connect("localhost","root","","prueba");
		if(mysqli_connect_errno()){
			echo "error en la conecion";
			exit();
		}
		mysqli_set_charset($con,"utf8");
		$consulta = "SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$var%'";
		$resultado = mysqli_query($con,$consulta);

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

		while ($filas = mysqli_fetch_array($resultado,MYSQL_ASSOC)){ ?>

		<tr>
				<td> <?php echo $filas["CÓDIGOARTÍCULO"]; ?> </td>
				<td> <?php echo $filas["SECCIÓN"]; ?> </td>
				<td> <?php echo $filas["NOMBREARTÍCULO"]; ?> </td>
				<td> <?php echo $filas["PRECIO"]; ?> </td>
				<td> <?php echo $filas["FECHA"]; ?> </td>
				<td> <?php echo $filas["IMPORTADO"]; ?> </td>
				<td> <?php echo $filas["PAÍSDEORIGEN"]; ?> </td>
			</tr>	
	

<?php  
		}
		echo "</table>";
		mysqli_close($con);

	}

?>

<body>
	<?php 
		$num = $_POST["busqueda"];
		$pagina = $_SERVER["PHP_SELF"];//me devueve el nombre de la pagina donde me encuentro. "esta $_SERVER ES UNA ARRAY CON BASTANTES OPCIONES SE LE PUDE SACAR TODA LA INFORMACION CON Un FOREACH"
		if($num !=""){
			// $num = $_POST["busqueda"];
			busqueda_mysql($num);
		}else{?>
			
		<form action="<?php echo $pagina; ?>" method="POST">
			<label for=""> Busquda</label>
			<input type="text" name="busqueda">
			<input type="submit" name = "ok" value="Dale!">
		</form>


<?php } ?>
	

	 
</body>
</html>

