<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio15</title>
</head>
<style>
	hr{
		background: black;
		height: 1px;


	}

</style>
<body>
	<?php 
	// esta funcion especial php la soporta dandole un valor por defecto al parametro	
		function dame($d,$nombre ="jeyson"){
			echo ("la edad es $d y el nombre $nombre");

		}
		dame(12);

		echo "<hr>";
		echo "Funciones con parametro y referencia <br>";
	// esta funcion con parametro & ase referencia ala variable que estamos pasando a esta funcion y si
	//dentro de la funcion se cambia la variable que le pasamos por referencia cambia su valor tambien
		function cambiar(&$num){
			$num++;
			return $num;
		}		
		$numero = 4;
		echo cambiar($numero)."<br>";
		echo $numero;


	 ?>
</body>
</html>