<?php 
	$indexado = [
		"nombres"=>["jeyson","estefani","andersso"],
		"apellidos"=>["ramos","chavez","caceres"],
		"edad"=>[23,19,22]];

	// echo var_dump($indexado)."<br>";
	 $var = 0;
	foreach ($indexado as $clave=>$valor) {
		foreach ($valor as $valor2) {
			echo "La clave es: ".$clave."=>".$valor2."<br>";
		}
	}
	
 