<?php 
	function imprimir(){
		//esta funcion obtiene los valores de los parametros pasados ala funcion y lo convierte en un array que es devuelto a la variable donde se utiliza 
		$nombres = func_get_args();

		foreach ($nombres as $nombre) {
			echo "Los nombres son: {$nombre}<br>";
		}
	}
	// imprimir("jeyson","Steven","andi");

	//especificamos el tipo de parameto que va a recibir en este caso espera un tipo array
	function devuelve(array $nombres){
		foreach ($nombres as $nombre) {
			echo "hola {$nombre}<br>";
		}


	}
	devuelve(["jeyson","steven"]);
 ?>