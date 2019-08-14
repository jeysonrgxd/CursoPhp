<?php 
	$destino = $_POST["destino"];
	$asunto = $_POST["asunto"];
	$comentario=$_POST["area"];

	$header = "MIME-Version: 1.0\r\n";
	$header.="Content-type: text/html; charset=iso-8859-1\r\n";
	$header.="From: Prueba Jeyson < jeysonrgxd@gmail.com >\r\n";

	$exito = mail($destino, $asunto, $comentario,$header);

	if($exito){
		echo "mensaje enviado";
	}else{
		echo "error";
	}

 ?>