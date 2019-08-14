<?php 
	try {
		$con =  new PDO("mysql:host=localhost; dbname=prueba","root","");
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$con->exec("SET CHARACTER SET utf8");
		$query = "SELECT * FROM usuarios WHERE nombre = :usu AND contrasena = :pass";
		$PDOstate =  $con->prepare($query);
		$usu = htmlentities(addslashes($_POST["usu"]));
		$pass = htmlentities(addslashes($_POST["cont"]));
		$PDOstate->bindValue(":usu",$usu);
		$PDOstate->bindValue(":pass",$pass);
		$PDOstate->execute();
		$afectada = $PDOstate->rowCount();
		$datos=$PDOstate->fetch(PDO::FETCH_ASSOC);

		if($afectada>0){
			session_start();
			$_SESSION["nombre"]=$usu;
			$_SESSION["telefono"]=$datos["telefono"];
			$_SESSION["dni"]=$datos["dni"];
			header("location:usuarios_registrados.php");
			
		}else{
			header("location:Login.php");
		}
		
	} catch (Exception $e) {
		die("Error".$e->GetMessage(). " Line ".$e->Getline()." Codigo de error ".$e->Getcode());
	}

 ?>