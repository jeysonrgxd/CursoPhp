<?php 
	if(isset($_POST["boton"])){
		try {
			$con =  new PDO("mysql:host=localhost; dbname=prueba","root","");
			$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$con->exec("SET CHARACTER SET utf8");
			$query = "SELECT * FROM usuarios WHERE nombre = :usu AND contrasena = :pass";
			// $query = "SELECT * FROM usuarios WHERE nombre = ? AND contrasena = ?";
			$PDOstate =  $con->prepare($query);
			$usu = htmlentities(addslashes($_POST["usu"]));
			$pass = htmlentities(addslashes($_POST["cont"]));
			$PDOstate->bindValue(":usu",$usu);
			$PDOstate->bindValue(":pass",$pass);
			//-------otr forma de pasar si usamos ?
			// $PDOstate->bindValue(1,$usu);
			// $PDOstate->bindValue(2,$pass);

			$PDOstate->execute();
			$afectada = $PDOstate->rowCount();
			$datos=$PDOstate->fetch(PDO::FETCH_ASSOC);

			if($afectada>0){
				session_start();
				$_SESSION["nombre"]=$usu;
				$_SESSION["telefono"]=$datos["telefono"];
				$_SESSION["dni"]=$datos["dni"];
				echo"<h2>Bienvenido ". $_SESSION["nombre"]." tu DNI es: ".$_SESSION["dni"]."<br>"."Tu telefono es: ".$_SESSION["telefono"]."</h2>";

				
			}else{
					echo "Error Usuario y o contraseña incorrecta";
				}
		
		}catch (Exception $e) {
				die("Error".$e->GetMessage(). " Line ".$e->Getline()." Codigo de error ".$e->Getcode());
			}
	}

 ?>