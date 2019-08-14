<?php 

	$con = mysqli_connect("localhost", "root","","prueba");
	mysqli_set_charset($con,"utf8");

	//esta funcion lo que ase es quitar los caracteres raros para evitar las inyecciones sql
	$usuario = mysqli_real_escape_string($con, $_POST["usuario"]);
	$pass= mysqli_real_escape_string($con, $_POST["contrasena"]);
	

	if(mysqli_connect_errno()){
		echo "error de conexion";
		exit();
	}

	$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena = '$pass'";
	$query = mysqli_query($con,$consulta);
	//comprobamos las filas afectadas
	if(mysqli_affected_rows($con)>0){
		genera($query);
	}else{
		echo "error en la consulta";
	}
	
	function genera($tabla){
		echo "<table border='1'>";
		while($fila = mysqli_fetch_array($tabla,MYSQL_ASSOC)):
			echo "<tr>";
			foreach ($fila as $clave => $valor) :?>	
				<td> <?php echo "$clave => $valor" ;?> </td>		
	<?php  endforeach;
			echo "</tr>";
		endwhile;
		echo "</table>";
	}
?>