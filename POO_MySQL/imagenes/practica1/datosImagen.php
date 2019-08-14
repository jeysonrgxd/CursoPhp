<?php 
	$nombre = $_FILES["imagen"]["name"];
	echo "<strong>Nombre del libro:</strong>  $nombre <hr>";

	$tipo = $_FILES["imagen"]["type"];
	echo "<strong>Tipo de archivo: </strong> $tipo <hr>";

	$tamano = ($_FILES["imagen"]["size"])/1000;
	echo "<strong>Tamano de la imagen: </strong>$tamano Kb <hr>";

	$lugar = $_FILES["imagen"]["tmp_name"];
	echo "<strong>Se guarda temporalmente:  </strong>$lugar <hr>";

	$carpeta_destino = $_SERVER["DOCUMENT_ROOT"].'/intranet/uploads/';
	// mover el archivo y guardarlo de la carpeta temporal al servidor
	move_uploaded_file($_FILES["imagen"]["tmp_name"], $carpeta_destino.$nombre);
	echo "Guardada en la carpeta";
	// $imagen = $_FILES["imagen"];
	// foreach ($imagen as $key => $valor) {
	// 	echo $key."=>".$valor."<br>";
	// }

	
 ?>