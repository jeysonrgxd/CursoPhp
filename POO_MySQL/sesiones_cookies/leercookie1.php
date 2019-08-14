<?php 
	//no aseguramos para la leer la cookie si la varible super global $_COOKIE["???"] asido creado con la funcion isset la cual nos comprueba si esa variable tiene valor o no (no devuelve tru o false) y luego la imprimimos. ojo: la clave de la variable super global $_COOKIE[""] TIENE QUE SER EL NOMBRE CON LA CUAL EMOS YAMADO A ESA COOKIE
	if(isset($_COOKIE["hola"])){
		echo $_COOKIE["hola"];
	}else{
		echo "Error no hay cookie";
	}

 ?>