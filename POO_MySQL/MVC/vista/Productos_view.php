<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mostrar_prouctos</title>
</head>
<body>
	<?php 	
		foreach ($registro as $clave) {
			echo "Nombre: ".$clave["nombre"]."<br>";
		}
	 ?>
</body>
</html>