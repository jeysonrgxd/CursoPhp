<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>actualizar</title>
	<style>
		body{
			background-color:#FFC;
		}
		h1{
			text-align: center;
		}
		input{
			margin: 0px 3px;
		}
		table{
		border:1px solid #000099;
		

		}

	</style>
</head>

<body>
	<?php 
		if(!isset($_POST["actu"])){
			$dni = $_GET["Id"];
			$nom = $_GET["nom"];
			$ape = $_GET["ape"];
			$edad = $_GET["edad"];
		}else{
			require_once 'Conectar.php';
			$base = Conexion::conectar();
			$dni=$_POST["dni"];
			$nom =$_POST["nom"];
			$ape =$_POST["ape"];
			$edad =$_POST["edad"];
			//no acualiza el campo en donde utulizamos el where ya que se equivoca por que estamos actualizando y ala vez buscando por ese ya actualizado
			$consulta = "UPDATE datospersonales SET dni='$dni', nombre='$nom', apellido='$ape', edad='$edad' WHERE  dni='$dni'";
			$PDOstate=$base->prepare($consulta);
			$ok = $PDOstate->execute();
			if($ok){
				header("Location:../index.php");
			}else{
				echo "Error..!";
			}


		}
	 ?>
	 <h1>Actualizar</h1>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<table align="center">
			<tr>
				<td><label for="dni">DNI: </label></td>
				<td><input type="text" name="dni" id="dni" value="<?php echo $dni ; ?>"></td>
			</tr>
			<tr>
				<td><label for="nombre">Nombre: </label></td>
				<td><input type="text" name="nom" id="nombre" value="<?php echo $nom ; ?>"></td>
			</tr>
			<tr>
				<td><label for="apellido">Apellido: </label></td>
				<td><input type="text" name="ape" id="apellido" value="<?php echo $ape ; ?>"></td>
			</tr>
			<tr>
				<td><label for="edad">Edad: </label></td>
				<td><input type="text" name="edad" id="edad" value="<?php echo $edad ; ?>"></td>
			</tr>
			<tr style="text-align: center;">
				<td colspan="2"><input type="submit" name="actu" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>