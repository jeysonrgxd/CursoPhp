<?php 
//le pasamos una condicional que devuelve un valor si la condicion se cumple si no devuelve otro valor
	var_dump((1>2) ? "hola como estas":"no es verdadero");
	echo "<br><hr>";

	//prbamos operadores logicos xor si uno de ellos es true devuelve true si los dos son true devuelv false
	var_dump(true xor false);
	echo "<br><hr>";
	
	//variable que le asiganamos una valor con operador tenario
	$nombres= (1>2) ? "hola jeyson" : "hola";

	echo $nombres;

	//ejemplo ternario con isset
	echo "<br><hr>";
	var_dump(isset($nombres) ? "hola como estas" : "hola");




	


 ?>