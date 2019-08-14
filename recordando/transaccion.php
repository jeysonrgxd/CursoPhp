<?php 
	$con = new PDO("mysql:host=localhost; dbname=prueba","root","");
	$con->exec("SET CHARACTER SET uf8");
	if(isset($_POST["guardar"])){
		try {
			$dni = $_POST["dni"];
			$nombre = $_POST["nombre"];
			$telefono = $_POST["telefono"];
			$usuario = $_POST["usuario"];
			$contra = $_POST["contra"];

			$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$consulta ="INSERT INTO usuarios VALUES (:dni,:nom,:tel,:usu,:cont)";
			$PDOstate = $con->prepare($consulta);
			$ok=$PDOstate->execute(array("dni"=>$dni,"nom"=>$nombre,"tel"=>$telefono,"usu"=>$usuario,"cont"=>$contra));
			if($ok){
				echo "datos guardados";
			}
			
		} catch (Exception $e) {
			die("Error".$e->GetMessage());
		}
	}	
	else if(isset($_POST["eliminar"])){
		try {
		 	$dni = $_POST["dni"];
			$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$consulta="DELETE FROM usuarios WHERE dni = ?";
			$PDOstate=$con->prepare($consulta);
			$ok = $PDOstate->execute(array($dni));
			if($ok){
				echo "Se elimino regisstro";;
			}else{
				echo "error con la consulta";
			}
		} catch (Exception $e) {
			die("ERROR". $e->GetMessage());		
		}


	}

 ?>