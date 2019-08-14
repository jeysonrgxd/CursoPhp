<?php 	
	$nombre = $_FILES["imagen"]["name"];
	$peso = $_FILES["imagen"]["size"]/1000;
	$tipo = $_FILES["imagen"]["type"];
	echo "el archivo pesa : $peso<br>";

	if($peso <7000){
		if($tipo =="image/png" || $tipo =="image/jpg" || $tipo=="image/jpeg" || $tipo=="image/gif"){
			require '../../parametros_de_conexion.php';
			$conexion = mysqli_connect($host,$usuario,$contra,$bd);
			if(mysqli_connect_errno()){
				echo "error de conexion";
				exit();
			}
			mysqli_set_charset($conexion,"utf8");
			$consulta = "UPDATE productos SET FOTO = '$nombre' WHERE CÓDIGOARTÍCULO = 'AR01'";
			$ok=mysqli_query($conexion, $consulta);
			if($ok){
				move_uploaded_file($_FILES["imagen"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"].'/intranet/uploads/'.$nombre);
				echo "ruta de foto guardada";
				header("location:imagenes_guardado.php?volver=mostrar");
			}

		}else{
			echo "Error el archivo seleccionado no es una imagen";
		}
	}else{
		echo "La imagen pesa mucho para guardarlo en el servidor";
	}




 ?>