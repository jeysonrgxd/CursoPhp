<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Strings</title>
	<style>
		.codigo{
			color: #D061F5;
			font-weight: bold;

		}
	</style>
</head>
<body>
	<?php 
		/*
		// cuando queremos meter una etiqueta con nombre o en este caso con una clase(class) devido que le
		//añadiremos un color y fuente el valor de la clase o  nombre(class='') tiene que ser en comillas ya
		// que esta etiqueta esta dentro de llaves no puede aver llaves hijas dentro de llaves padres por
		//eso lo ponemos con comillas simples	
		echo "<p class='codigo'>Hola que hace </p>";//primera forma
		echo '<p class="codigo">Hola que hace </p>';//segunda forma
	    echo "<p class=\"codigo\">Hola que hace </p>";//tercera forma
	    */


		/*
		//tambien recordar que puedes meter una varible con valor dentro de un string este la reconocera
		$nombre ="jeyson";
		echo "Mi nombre es: $nombre";
				

		//pero si echo lo ponemos con comillas simples('') este lo tomara de forma literaria a la varible y
		//nos imprimira con conforme esta dentro de las comillas simples
		echo 'su nombre es: $nombre';
		*/
		
		//strcmp y strcasecmp
		$nombre ="jeyson";
		$nombre2 ="JEYSON";
		$valor = strcmp($nombre, $nombre2);//verfica si tiene mayuscula.da 1 si no son iguales y da 0 si son iguales
		$valor2 = strcasecmp($nombre, $nombre2);//no verifica mayus. da 1 si no son iguales y da 0 si son iguales
		function dame1(){
			global $valor;
			if ($valor) {
				echo "el valor de la comparcion primera es : no coinciden<br>";
					
			}else{
				echo "el valor de la comparacion primera es : coinciden<br>";

			}
	}
		function dame2(){
			global $valor2;
			if ($valor2) {
				echo "el valor de la comparacion segunda es: no coinciden<br>";
			} else {
				echo "el valor de la comparacion segunda es: coinciden<br>";
			}
			

		}

		dame1();
		dame2();


	 ?>
	
</body>
</html>