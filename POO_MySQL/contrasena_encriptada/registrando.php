<?php 
	$usuario = $_POST["usuario"];
	$password = $_POST["contra"];
	//password_hash($contra, PASSWORD_DEFAULT) lo que ase es guardar una contraseña encriptada diferente asi sea la misma contra que estamos guardando es uan medida de seguridad extrema y nueva
	$contrasegura = password_hash($password, PASSWORD_DEFAULT);

	try {
		$con = new PDO("mysql:host=localhost; dbname=ejemplo","root","");
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$con->exec("SET CHARACTER SET utf8");
		$consulta = "INSERT INTO usuarios VALUES('$usuario','$contrasegura')";
		$PDOstate = $con->prepare($consulta);
		$PDOstate->execute();
		
	} catch (Exception $e) {
		die("Error" .$e->GetMessage()." Linea: ".$e->GetLine(). "Codigo: ".$e->GetCode());
	}
 ?>