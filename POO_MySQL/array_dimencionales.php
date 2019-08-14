<?php
	echo "<h2 style='color: red'>DATOS IMPRESOS CON FOREACH</h2>";
	//array multidimencionales
	$alimentos = array("frutas"=>array("rojas"=>"mazana",
										"verde"=>"limon",
										"amarilla"=>"platano"),

							"verduras"=>array("almidon"=>"papa",
													"naranja"=>"zanahoria",
													"arinoza"=>"yuca"),

							"carnes"=>array("vaca"=>"lomo",
				           					"pollo"=>"pechuga",
												"cerdo"=>"chicharron"));

	foreach ($alimentos as $clave_alim => $alim) {
		echo "$clave_alim<br>";
		while(list($clave,$valor)=each($alim)){//list = desdovla con clave y valor---each()= el array y lo 
															//igualamos ala list para que desdovle en clave y valor y mientras hay valores imprimeme
			echo "$clave = $valor<br>";
		}
		echo "<br>";
	}

	echo "<h2 style='color: red'>DATOS CON LA FUNCION VAR_DUMP</h2>";
	echo var_dump($alimentos);//imprime los valores y los datos del array completo pasandole la
										// la variable array que creamos
 ?>