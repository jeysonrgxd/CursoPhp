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
			$edad = $_POST["edad"];
			$nom = $_POST["nombre"];
			if ($edad<=14) {
				$rpta ="$nom eres un niño";
			} 
			else if($edad<=27){
				$rpta ="$nom eres un adulto";
			}
			else if($edad<=40){
				$rpta ="$nom eres un adulto";
			}

			else {
				$rpta ="$nom eres un viejo";;
			}
			
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
					<td>Nombre: </td>
					<td><input type="text" name="nombre"></td>
				</tr>
				<tr>
					<td>Edad: </td>
					<td><input type="text" name="edad"></td>
				</tr>
				<tr align="center">
					<td colspan="2"> <input type="submit" name="ok" value="Aceptar"></td>
					
				</tr>
			</table>
		</form>
		</div>
	</center>
	<p> <?php echo " ".valida(); ?> </p>
	
</body>
</html>