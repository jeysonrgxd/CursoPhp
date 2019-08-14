<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	//abrimos una cookie la cual recive cuatro parametros lo cual puede ser mas pero solo definimos 4 los cuales son el nombre del cookie el valor de la cookie el tiempo de vida de cookie y el donde se va aguadar el cookie de auerdo a una carpeta la cual solo severa por los ficheros que tengan en ese carpeta que esten leyendo a la cookie los de afuera de la carpeta por mas que pongan el codigo para leer la cookie no la leeran
		setcookie("hola", "hola jeyson como esta",time()+300,"/Curso%20PHP/POO_MySQL/sesiones_cookies/poer%20aqui%20cookie/");


	 ?>
</body>
</html>