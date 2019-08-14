<?php 
	$con = mysqli_connect("localhost","root","","prueba");
	mysqli_set_charset($con,"utf8");
	if(isset($_POST["enviar"])){
		$cod = $_POST["c_art"];
		$sec = $_POST["seccion"];
		$articulo = $_POST["nom_art"];
		$precio =$_POST["precio"];
		$fecha = $_POST["fecha"];
		$import = $_POST["importado"];
		$pais = $_POST["pais"];

		if(mysqli_connect_errno()){
			echo "Error de conexion..";
			exit();
		}
		$consulta = "INSERT INTO productos (CÓDIGOARTÍCULO,SECCIÓN,NOMBREARTÍCULO,PRECIO,FECHA,IMPORTADO,PAÍSDEORIGEN,FOTO)
					VALUES ('$cod','$sec','$articulo','$precio','$fecha','$import','$pais','')";

		$query = mysqli_query($con,$consulta);

		if($query){?>
			<script>
				window.alert("Datos insertados");
				location.href ='Insertar_eliminar_registro_mysql.php';
			</script>
		
	<?php }else{
		echo "Error..";
		}
	} 

	else if(isset($_POST["eliminar"])){
		$cod = $_POST["c_art"];
		if(mysqli_connect_errno()){
			echo "Error en la conexion..";
			exit();
		}
		$consulta = "DELETE FROM productos WHERE CÓDIGOARTÍCULO = '$cod'";
		$query = mysqli_query($con,$consulta);
		if($query){
			$fila = mysqli_affected_rows($con);
			if($fila>0){?>
			<script> window.alert("filas afectadas : <?php echo $fila; ?> \nEliminada") 
					location.href='Insertar_eliminar_registro_mysql.php';
			</script>

    	<?php }else{?>	
				
				<script>alert("filas afectadas : <?php echo $fila; ?> \n Codigo no exite")
						location.href='Insertar_eliminar_registro_mysql.php';
				</script>
<?php  			
			}
		}else{
			echo "ERROR CON LA LA CONSULTA..";
		}

	} 
?>
	




