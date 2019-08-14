<?php  
	$bd_host = "localhost";
	$bd_nombre = "prueba";
	$bd_usuario = "root";
	$bd_contra = "";

	// $conexion = mysqli_connect($bd_host,$bd_usuario,$bd_contra);//conexion sin especificar el nombre de la base de datos
	$conexion = mysqli_connect($bd_host,$bd_usuario,$bd_contra,$bd_nombre);//conexion normal
	if(mysqli_connect_errno()){
		echo "la conexion fallo" ;
		exit();
	}
	//or die es cuando hay error muestra el mensaje;
	// mysqli_select_db($conexion,$bd_nombre) or die ("No se encuentra la base de datos"); 	se utiliza cuando no se declara el 																							nombre de la bae de datos en funcion 																						 de conexion
	mysqli_set_charset($conexion,"utf8");//especificacion de caracter latina cunaod traemos datos latinos de la base de datos y los mostramos
	$consulta = "SELECT * FROM datospersonales";
	$resultado = mysqli_query($conexion,$consulta);//me devuelve una tabla virtual 
	// $fila = mysqli_fetch_row($resultado); recoremos cada fila de la tabla y lo guarda en un array 
	// echo $fila[0]."<br>";
	// echo $fila[1]."<br>";
	// echo $fila[2]."<br>";
	// echo $fila[3]."<br>";
	
	// echo "<h2>siguiente registro</h2>";

	// $fila = mysqli_fetch_row($resultado); lo ejecutamos de nuevo y se pasa ala siguien te fila asi susesivamente
	// echo $fila[0]."<br>";
	// echo $fila[1]."<br>";
	// echo $fila[2]."<br>";
	// echo $fila[3]."<br>";

	//de una manera mas rapida en bucle while mientras aiga fila hacer...
	while (($fila = mysqli_fetch_row($resultado))== true){?>
		<table border="1" align="center">
			<tr>
				<td>DNI</td>
				<td>NOMBRE</td>
				<td>APELLIDO</td>
				<td>EDAD</td>
			</tr>
			<tr>
				<td><?php echo $fila[0]; ?></td>
				<td><?php echo $fila[1]; ?></td>
				<td><?php echo $fila[2]; ?></td>
				<td><?php echo $fila[3]; ?></td>
			</tr>
		</table>
		<h2 style="text-align: center">SIGUIENTE REGISTRO</h2>

<?php 


	}
	mysqli_close($conexion); // cerramos la conexin


 ?>
