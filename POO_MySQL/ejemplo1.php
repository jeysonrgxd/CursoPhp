<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>probando</title>
</head>
<body>
	<?php 
		include("ejemplo1-1.php");
		$auto = new Coche();
		$camion = new Camion();

		echo "El motor de un auto es :".$auto->motor."<br>";
		echo "El motor de un camion es :".$camion->motor."<br>";

		echo"<hr><h2>Aora probamos los metodos de lon objetos:</h2>";
		echo "<strong>Metodos de el objeto auto:</strong><br>";
		$auto->arrancar();
		$auto->frenar();
		$auto->frenar();
		$auto->dame_color("Verde");

		echo "<br><strong>Metodos de el objeto Camion:</strong><br>";
		$camion->velocidad();
		$camion->frenar();
		$camion->girar();

	 ?>
</body>
</html>