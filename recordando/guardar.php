<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	h2{
		font-family: verdana;
	}
	input{
		border-radius: 6px;
		/*border:none;*/
		
	}
	div{
		text-align: center;
		width: 450px;
		height: 280px;
		border: 1px solid black;
		margin: auto;
		background-color: rgba(112,61,142,.7);

	}
		.datos{
			text-align: right;
			font-weight: bold;
			font-family: verdana;
		}
		
		.bot{
			width: 100px;
			margin:20px 0 ;
			cursor: pointer;
			color: white;
			border: 1px solid #EEEEEE;
			border-radius: 6px;
			height: 35px;
			font-weight: bold;
			font-size: 15px;
			font-family: verdana;
			background: #4899EB;
			
		}
		.bot2{
			width: 100px;
			margin:20px 0 ;
			cursor: pointer;
			color: white;
			border: 1px solid #EEEEEE;
			border-radius: 6px;
			height: 35px;
			font-weight: bold;
			font-size: 15px;
			font-family: verdana;
			background: #FB2A39;
			
		}
		.bot:hover{
			background: #398AD5;
		}
		.bot2:hover{
			background: #E82A2A;
		}
	</style>
</head>
<body>
	<div>
		<h2><u>Registro de usuarios</u></h2>
		<form action="transaccion.php" method="POST">
			<table align="center">
				<tr>
					<td class="datos"><label for="dni">DNI :</label></td>
					<td><input type="text" name="dni" id="dni"></td>
				</tr>
				<tr>
					<td class="datos"><label for="nombre">NOMBRE :</label></td>
					<td><input type="text" name="nombre" id="nombre"></td>
				</tr>
				<tr>
					<td class="datos"><label for="telefono">TELEFONO :</label></td>
					<td><input type="text" name="telefono" id="telfono"></td>
				</tr>
				<tr>
					<td class="datos"><label for="usuario">USUARIO :</label></td>
					<td><input type="text" name="usuario" id="usuario"></td>
				</tr>
				<tr>
					<td class="datos"><label for="contrasena">CONTRASEÑA :</label></td>
					<td><input type="text" name="contra" id="contra"></td>
				</tr>
				<tr>
					<td  class="boton"><input type="submit" class="bot" name="guardar" value="Guardar"></td>
					<td  class="boton"><input type="submit" class="bot2" name="eliminar" value="Eliminar"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>


 