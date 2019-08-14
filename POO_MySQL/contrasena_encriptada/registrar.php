<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		div{
			margin: auto;
			width: 300px;
			height: 170px;
			font-weight: bold;
			border: 1.5px dashed red;
			background: #FFFBC9;
		}
		h2{
			text-align: center
		}
		.letra{
			float: right;
		}
		
	</style>
</head>

<body>
	<div>
		<h2>Registrando</h2>
		<form action="registrando.php" method="POST"> 
			<table align="center">
				<tr>
					<td class="letra">Usuario:</td>
					<td><input type="text" name="usuario"></td>
				</tr>
				<tr>
					<td class="letra">Contraseña:</td>
					<td><input type="text" name="contra"></td>
				</tr>
				<tr align="center">
					<td colspan="2"><input type="submit" name="aceptar" value="Registrar"></td>
					
				</tr>
			</table>
		</form>
	</div>
</body>
</html>