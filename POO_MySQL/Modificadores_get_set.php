<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio_mdificador</title>
</head>
<body>
	<?php 
		include "erencia.php";
		$mazda = new Coche();
		$optimu = new Camion();
		echo "las ruedas del mazda es: ". $mazda->get_ruedas()."<br>";
		echo "las ruedas del optimus es: ". $optimu->get_ruedas()."<br>";

		$mazda->set_color("rojo");
		echo "el color del mazda es: ".$mazda->get_color()."<br>";

		$optimu->set_color("verde");
		echo "El color del optimus es: ".$optimu->get_color()."<br>";
	 ?>
</body>
</html>