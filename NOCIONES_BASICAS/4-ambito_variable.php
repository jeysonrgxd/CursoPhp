<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 
/*en php los ambitos de las variables son muy diferentes que en otros lenguajes ya que aqui se tiene que 
utilizar la palabra "global" depues la varible que asido declarada fuera de la funcion en donde la que
queremos sobreescribir. devido por los include y require ya que estos nos permite incluir codigos de otros programadores en donde pudieran tener variables con el mismo nombre el cual declaramos las nuestras por 
php se comporta de esta manera*/
	$nombre = "jeyson";
	$edad=22;

	//funcion de prueva
	function dame(){
		//palabra global para poder acceder a las variables globales y poder hacer lo que queramos con ella
		global $nombre;
		global $edad;
		$nombre="jeyson ramos";
		$edad = 23;

	}
	//llamamos ala funcion
	dame();

	//imprimimos en navegador
	echo "el nombre es: " . $nombre . "<br>la edad es: " . $edad;


 ?>
	
</body>
</html>