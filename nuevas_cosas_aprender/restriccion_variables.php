<?php declare(strict_types = 1);

//que me devuelva un valor de tipo int
function sumar (int $x, int $y):int{
	return $x+$y;
} 
//esto bota error por que no cumple con los tipos de datos de la funcion
//echo sumar('3',5);

//esto si devuelve un string devido que le pasamos los parametros con los tipos de datos adecuados
echo sumar(3,5);
 ?>