<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vari.Static</title>
</head>
<body>
	<?php 
		//metodo static nos sirve para que una ves la varible que declarmos dentro de la funcion y ala ves lo aumnetamos
		//esta conserve su valor una ves salga de su ambito que es la funcion ya que llamamos 3veces ala funcion. si endo
		//static muy util para que la variable conserve su valor y ademas nos ahorra crear una variable afuera y luego
		//en la funcion llamarlo con global.
		
		function incrementamelo(){
			//palabra static para que concerve su valor unna vez salimos de su ambito
			
		    static $contador=0;
			$contador++;
			echo $contador . "<br>";

		}
		//llamamos a la funcion 3 veces para probar este metodo de imcrementar
		incrementamelo();
		incrementamelo();
		incrementamelo();
		incrementamelo();
		incrementamelo();
		incrementamelo();

	/*
	 //metodo normal para imcrementar declaramos una varible, luego escribimos una funcion accedemos al variable con
	//la palabra global despues la utilizamos como queremos. lo que aremos es darle el primer valor 1 luego
	//se queda grabado como valor 1 gracias a ala pabra global 
		$edad=0;
		function incrementaVarible(){
			global $edad;
			$edad++;
			echo $edad . "<br>";

		}

		//imprimimos
		incrementaVarible();
		incrementaVarible();
		incrementaVarible();
		incrementaVarible();
		*/
		
	 ?>
	
</body>
</html>