<?php 
//para que sea estrico con variables agregamos esta linea de codigo
declare(strict_types=1); // soportados de 5.5 para arriva

//realizams una documetacion del codigo
	/**
	*Realiza una operacion aritmetica
	*
	*
 	*@param Closures $operacion
 	*@param $mixed $numero1
 	*@param $mixed $numero2b
 	*@return $mixed
	 */

	//funcion anonima sin return
	$suma = function ($a,$b){
		echo "la suma es ". ($a+$b)."<br>";
	};
	// suma(10,12);

	// funcion anonimas con return
	$nombre =  function($nombre){
		return $nombre;
	};

	// echo "hola ".$nombre("jeyson");

	//creamos una funcion y espicificamos que el primer parametro sea de tipo funcion(Closure) la cual al pasarle ya deve estar creada las funciones
	function operacion(Closure $operacion, $num1, $num2){
		echo "{$operacion($num1,$num2)}<br>";
	}

	$sumar = function($a,$b){
		return $a+$b;
	};

	$restar = function($a,$b){
		return $a-$b;
	};

	

	operacion($sumar,5,5);

	operacion($restar,5,5);
 ?>