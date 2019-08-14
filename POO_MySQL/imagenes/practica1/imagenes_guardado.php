<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	</style>
</head>
<body>
		<form action="guardar_imagen.php" method="POST" enctype="multipart/form-data">
			<label for="">Escojer Imagen</label>
			<input type="file" name="imagen" zise>
			<input type="submit" name="aceptar" value="Guardar">
		</form>
		<br>
		<hr>
		<?php 
			if(isset($_GET["volver"])){
				echo "hola muchanchos";

				require '../../parametros_de_conexion.php';
				$conexion = mysqli_connect($host,$usuario,$contra,$bd);
				if(mysqli_connect_errno()){
					echo "error de conexion";
					exit();
				}
				mysqli_set_charset($conexion,"utf8");
				$consulta = "SELECT * FROM productos WHERE CÓDIGOARTÍCULO = 'AR01'";
				$query=mysqli_query($conexion,$consulta);
				while($resultado=mysqli_fetch_array($query,MYSQLI_ASSOC)):?>
					<img src="/intranet/uploads/<?php echo $resultado['FOTO'];?>" alt="" width="300px" height=300px>
					
		<?php endwhile;
		
			}
		 ?>
				
				
			

		

		 
</body>
</html>