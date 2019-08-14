<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<script>

		 var nombre = document.getElementById("nombre");
            nombre.addEventListener("click", nombre,false);
            public static void
            function nombre(){
            	var num = 1+3;
                alert("Hola como estas");
                if(true){
                    document.write("<p>hola como estas</p>");
                }
            }


	</script>
</body>
</html>
<?php 

	require('parametros_de_conexion.php');
	$conexion = mysqli_connect($host,$usuario,$contra,$bd);
	if(mysqli_connect_errno()){
		echo "Error al conectar";
		exit();
	}
	mysqli_set_charset($conexion,"utf8");
	$consulta = "SELECT * FROM PRODUCTOS WHERE paísdeorigen = 'ESPAÑA'";
	$resultado = mysqli_query($conexion,$consulta);
	echo "<table align='center' border='1'>
			<caption align='bottom'>Encabezado de la tabla.</caption>
			<tr>
				<th>CODIGOARTICULO</th>
				<th>SECCION</th>
				<th>NOMBREARTICULO</th>
				<th>PRECIO</th>
				<th>FECHA</th>
				<th>IMPORTADO</th>
				<th>PAISORIGEN</th>
				<th>FOTO</th>
			</tr>";
	while($filas = mysqli_fetch_row($resultado)){?>
			<tr>
				
				<td><?php echo $filas[0]; ?></td>
				<td><?php echo $filas[1]; ?></td>
				<td><?php echo $filas[2]; ?></td>
				<td><?php echo $filas[3]; ?></td>
				<td><?php echo $filas[4]; ?></td>
				<td><?php echo $filas[5]; ?></td>
				<td><?php echo $filas[6]; ?></td>
				<td><?php echo $filas[7]; ?></td>
			</tr>
		
			



	<?php } 
		echo "</table>";



	?>