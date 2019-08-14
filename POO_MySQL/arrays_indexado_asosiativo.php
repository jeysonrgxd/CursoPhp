<?php 
	echo "<h2>ARRAY INDEXADO</h2>";
	$estados[]= "Lima";
	$estados[]= "Bogota";
	$estados[]= "Caracas";
	$estados[]= "Mexico";
	$estados[]= "Montevideo";
	$estados[]= "Asuncion";
	sort($estados);//ordenamos los elementos de manera ortorafica
	echo "<strong style ='color:black'>ordenados</strong><br>";
	for ($i = 0; $i<count($estados); $i++){
		
		echo "<strong>".$estados[$i]."</strong><br>";
	}
	echo "<hr><br>Array indexado segundo<br>";
	$paises = array("peru","mexico","guatemala","venezuela","colombia");
	for ($j=0; $j < count($paises) ; $j++) { 
	 	echo "<strong>".$paises[$j]."</strong><br>";
	 } 

	echo "<h2>ARRAY ASOSIATIVO</h2>";
	$datos= array("Nombre"=> "Jeyson", "Apellido"=>"Ramos", "Edad"=>23 );
	$datos["sexo"]= "Hombre"; //metemos un valor al array asosiativo
	foreach ($datos as $asoci => $var) {
		echo "$asoci : $var <br>";
	}
	

 ?>
 <style>
 	strong{
 		color: red;
 		
 	}
 </style>