<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<?php 
		//las varibles se ponene de forma directa sin nesesidad como en otro lenguajes como java especificar el tipo
		//de variable osea (int, double, float, char, String etc) aca en php no es nesesario esto asume ya con el valor
		//que tu le pasas al a variable tambien en ejecucion el valor de la variable puede cambiar
		$nombre = "jeyson";
		$edad = 22;
		$suma = 22+1;
		$char = 'a';



		//print es para imprimir e consola y de esta manera concatenamos con . es mejor dejar espacio antes y despues
		// del punto concatenador, el <br> es para separar
		//el echo ase la misma funcion pero este puede imprimir variables junta separadas con coma que no lo puede
		// el print por que "print es una funcion" y "echo es una exprecion"
		print("El nombre el futuro programador es: " . $nombre . " y su edad es: " . $edad . "<br>" );
		echo $nombre,$edad . "<br>";
		echo "el nombre es :" . $nombre . " su edad es: " . $edad;
		//tambien puede ser sin los parentesis
		print "<br> la edad dentro de un año es : " . $suma;
		echo "<br> la vocal es: " . $char . "<br>";

		//tambien puede imprimir un texto y una variable en una misma llave
		print("El valor de la suma de la edad de jeyson es: $suma");


		 ?>
		
	</body>
	</html>