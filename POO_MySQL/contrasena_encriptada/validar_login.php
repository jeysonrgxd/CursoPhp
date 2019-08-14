<?php 
//este ejercicio verificamos si hay usuario lo cual usamos la funcion password_verify: lo cual acepta el password que estamos recuperando del formulario y el valor encontrado por cada usuario la contraseña traida de la base de datos, usamos el contador por que como minimo deve aver un encontrado eso en el caso si hay dos com el mismo usuario y no el password por que al utilizar el password_hash($contra, PASSWORD_DEFAULT) lo que ase es guardar una contraseña encriptada diferente asi sea la misma contra
	$usuario = htmlentities(addslashes($_POST["usuario"]));
	$password =htmlentities(addslashes($_POST["contra"]));
	$contador = 0;
	try {
	 	$con = new PDO("mysql:host=localhost; dbname=ejemplo","root","");
	 	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	 	$con->exec("SET CHARACTER SET utf8");
	 	$consulta = "SELECT * FROM usuarios WHERE usuario = :login";
	 	$PDOstate = $con->prepare($consulta);
	 	$PDOstate->execute(array("login"=>$usuario));
	 	while($resultado = $PDOstate->fetch(PDO::FETCH_ASSOC)){
	 		if(password_verify($password,$resultado["password"])){
	 			$contador++;
	 		}
	 	}
	 	if($contador==0){
	 		echo "no funciona la funcon";
	 	}

	 } catch (Exception $e) {
	 	die("Error: ".$e->GetMessage()."<br> Linea: ".$e->GetLine()." codigo ".$e->GetCode());
	 } 


 ?>