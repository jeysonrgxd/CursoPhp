<?php 
	$nombre = $_POST["nombre"];
	$numper = $_POST["cantidad"];
	$adulto = $_POST["adultos"];
	$ninio = $_POST["ninios"];
	$fecha = $_POST["fecha"];
	$descuento = $_POST["descuento"];

	$con = mysqli_connect("localhost","root","","prueba");

	if(mysqli_connect_errno()){
		echo "Error de base de datos";
		die();
	}
	mysqli_set_charset($con,"utf8");
	$sql = "INSERT INTO prueba values('','','','')"
	$query = mysqli_query($con,$sql);



 ?>