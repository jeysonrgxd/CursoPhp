<?php 
try {
	$con = new PDO("mysql:host=localhost; dbname=prueba","root","");
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$con->exec("SET CHARACTER SET UTF8");
	$consulta = "SELECT FOTO FROM productos WHERE CÓDIGOARTÍCULO = 'AR01'";
	$PDOstate=$con->prepare($consulta);
	$PDOstate->execute();
	$resultado = $PDOstate->fetch(PDO::FETCH_ASSOC);
	$imagen = $resultado["FOTO"];


} catch (Exception $e) {
	die("Error: ".$e->GetMessage()."<br>Linea: ".$e->GetLine()."<br>Codigo: ".$e->GetCode());
}



 ?>