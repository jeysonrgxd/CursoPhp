<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<title>Document</title>
</head>
<body>
	<?php 

		echo "hola mundo como estas <br>";

		//function es una funcion y se crea de esta manera para concatener con otra varible declarada fuera de la funcion
		//asta este punto con lo aprendido se tiene que declarar adentro de la funcion creada
		function dame(){
			$nombre = "jeyson";
			$edad = "21";

			echo "el nombre de la persona es: " . $nombre;
		}
		//llamamos ala funcion que creamos
		dame();

		// traer una function de otro archivo puro de php digitamos la palabra include y parentesis y entre comillas
		//el archivo donde se encuentra:
		include("phpPuro.php");
		echo "hola que aze";

		dame2();
		

		//la otra palabra parecida a include es require la cual a difeencia de include si lo que
		//require le pasamos una dieccion mal de nuestro archivo php puro que contiene nuestra funcion
		//al ser require quien recive la direccion mal escrita no nos ejecuta nada de nuestro codigo 
		//acambio si es include si nos ejecuta los siguientes lineas de codigo pero el suyo nos muestra error
		//pero solo puede utilizar include(incliir pero hacer lo demas) o require(requiere para hacer lo demas)
		
		//lo ponemos en comentario por que bien usamos include o require
		//require("phpPuro.php");
		//dame3();

		

		


		


	 ?>
	
</body>
</html>