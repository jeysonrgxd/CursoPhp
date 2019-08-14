<?php 
	if(isset($_COOKIE["hola"])){
		echo $_COOKIE["hola"];
	}else{
		echo "Error no hay cookie";
	}

 ?>