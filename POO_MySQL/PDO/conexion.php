<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDO</title>
</head>
<body>
	<?php 
		try {
			$base = new PDO('mysql:host=localhost; dbname=prueba','root','');
			echo "conexion existosa";
		} catch (Exception $e) {
			die( "La conexion tuvo error el cual es: ".$e->getMessage());
		 } //finally{
		// 	echo "";
		// }

	 ?>
</body>
</html>