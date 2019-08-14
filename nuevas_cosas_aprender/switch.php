<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="nombre">
		<input type="submit" name="click" value="click">	
	</form>
</body>
</html>

<?php 
	if(isset($_REQUEST["click"])){

		$nombre = $_REQUEST["nombre"];

		switch($nombre){
			case 'jeyson':
				echo "hola ".$nombre;
				break;
			default:
				echo "hola a nadies";
		}
	}

 ?>