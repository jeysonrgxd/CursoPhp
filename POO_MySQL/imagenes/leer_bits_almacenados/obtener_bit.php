<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		h2{
			text-align: center;
		}
		div{
			width: 400px;
			height: 400px;
			margin: auto;
		}
		img{
			width: 300px;
			height: 300px;
			margin: auto;
		}

	</style>
	
</head>
<body>
	<?php 
		include 'modelo.php';
		$imagen = traerimagen();
	 ?>
	<h2>Imagen traida del sevidor</h2>
	<?php 
		
		foreach ($imagen as $clave => $valor){
			echo "<div>";
			echo "<img src='data:".$valor['tipo'].";base64," . base64_encode($valor['archivo'])."'>";
			echo "</div><hr><br>";
		}	

				



?>
</body>
</html>