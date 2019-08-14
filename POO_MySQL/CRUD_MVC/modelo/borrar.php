<?php 
	require 'Conectar.php';
	$base = Conexion::Conectar();
	$dni=$_GET["Id"];
	$consulta = "DELETE FROM datospersonales WHERE dni = '$dni' ";
	/*
		otra forma de como hacerlo
	 	$PDOstate = $base->prepare($consulta);
		 $ok=$PDOstate->execute();

		 if($ok){
			echo "El dni: ".$dni." ha sido borrado <br>";
			header("location:index.php");
		}else{
			echo "borrado";
		}
	 */
	//devuelve un true si se efectuo bien
	$valor = $base->query($consulta);
	if($valor){
		header("location:../index.php");
	}
	

 ?>