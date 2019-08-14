<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>condicionales</title>
</head>
<style>
	div{
		width: 20%;
		height: 173px;
		background-color: #FBE178;
		margin: 20px;
		text-align: center;
		border:2px solid black;

	}

	p{
		color: rgb(255,0,0);
	}

</style>

<?php
	function valida(){
		$rpta =" ";
		if(isset($_POST["ok"])){
			$edad = $_POST["usuario"];
			$nom = $_POST["contra"];
			//operador ternario
			$rpta = ($edad == "Jeyson") && ($nom=="1234") ? "Acceso":"Contraseña y/o usuario incorrectos";
			
		}	
		return $rpta;
	}
 ?>
<body>
	<center>
		<div>
			<h3>DATOS DE PERSONA</h3>
			<form action="" method="POST">
			<table align="center">
				<tr>
					<td>Usuario </td>
					<td><input type="text" name="usuario"></td>
				</tr>
				<tr>
					<td>Contraseña </td>
					<td><input type="password" name="contra"></td>
				</tr>
				<tr align="center">
					<td colspan="2"> <input type="submit" name="ok" value="Ingresar"></td>
					
				</tr>
			</table>
		</form>
		</div>
	</center>
	<p> <?php echo " ".valida(); ?> </p>
	
</body>
</html>