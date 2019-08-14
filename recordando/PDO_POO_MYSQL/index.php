<?php 
	require 'DevuelveUsuario.php';

	$base= new Transacciones();
	$dni = $base->mostrar_registro("andersson");
	foreach ($dni as $clave) {
		echo $clave["dni"]."<br>";
	}

	//metodo aplicado si recibimos un array
	/*for($i=0; $i<count($dni);$i++){
		echo $dni[$i]."<br>";
	}*/
	// while($resul=$dni->fetch(PDO::FETCH_ASSOC)){
	// 	echo $resul["dni"]."<br>";
	// }
	

	


 ?>