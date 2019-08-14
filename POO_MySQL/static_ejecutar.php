<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejecutar</title>
</head>
<body>
	<?php
		include "static_Concesionario_fecha.php";
		//Concecionario::$ayuda = 2000; //asi se llama auna variable o metodo static de la clase
		Concecionario::descuento();
		

		$compra_antonio = new Concecionario("urbano");
		$compra_antonio->climatizador();
		echo $compra_antonio->precio_final()."<br>";
		date_default_timezone_set('UTC');
		
	 
		


	 ?>
</body>
</html>