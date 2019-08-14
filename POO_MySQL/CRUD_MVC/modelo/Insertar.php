<?php 
	require_once 'Conectar.php';
	$base = Conexion::conectar();

	$dni=$_POST["dni"];
	$nom =$_POST["nombre"];
	$ape =$_POST["apellido"];
	$edad =$_POST["edad"];
	$consulta="INSERT INTO datospersonales VALUES(:dni,:nom,:ape,:edad)";
	$PDOstate = $base->prepare($consulta);
	$ok=$PDOstate->execute(array("dni"=>$dni,"nom"=>$nom,"ape"=>$ape,"edad"=>$edad));
	if($ok){
		header("Location:../index.php");
	}


 ?>