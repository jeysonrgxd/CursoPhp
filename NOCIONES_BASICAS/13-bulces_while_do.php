<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio_while_do</title>
</head>
<body>
	<?php 
		$num = 1;
		//while($num<10){
		do{
			echo " el numero $num sige siendo menor<br>";
			$num++;
		}while($num<20);
		echo "se acabo el bucle osea el numero ya no es menor o es igual<br>";
		echo $num;

	 ?>
</body>
</html>