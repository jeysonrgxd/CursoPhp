<?php 
	$codigo = $_POST["codigo"];
	$seccion = $_POST["seccion"];
	$nombre = $_POST["nombre"];
	$precio = $_POST["precio"];
	$fecha = $_POST["fecha"];
	$importado = $_POST["importado"];
	$pais = $_POST["pais"];
	

	$con = mysqli_connect("localhost","root","","prueba");
	mysqli_set_charset($con,"utf8");

	if(mysqli_connect_errno()){
		echo "conexion fallo";
		exit();
	}

	$consulta = "UPDATE productos SET CÓDIGOARTÍCULO='$codigo',SECCIÓN='$seccion',NOMBREARTÍCULO='$nombre', PRECIO='$precio',FECHA = '$fecha', IMPORTADO = '$importado', PAÍSDEORIGEN = '$pais' WHERE CÓDIGOARTÍCULO = '$codigo'";

	$query = mysqli_query($con,$consulta);

	$cant = mysqli_affected_rows($con);


	if($query){
			if($cant>0){ ?>
			<script>
				window.alert("Se actualizo: <?php echo $cant ?> filas ");
				location.href="busqueda.php";
			</script>

<?php    }else{?>
			<script>
				window.alert("Se actualizo: <?php echo $cant ?> filas ");
				location.href="busqueda.php";
			</script>		
		

<?php   } 

		}else{
			echo "ERROR CON LA CONSULTA..";
		}


	?>	
	
	



