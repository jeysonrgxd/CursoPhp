<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div{
			box-sizing: border-box;
			padding: 10px;
			width: 255px;
			height: 320px;
			border: 1px solid black;
			margin: auto;
			background-color: #ddd;
		}
		h2{
			margin: 0 0 10px 0;
			text-align: center;

		}
		input{
			margin-bottom: 10px;
		}
		.boton{
			display: block;
			margin: auto;
			width: 100%;
			height: 25px;
		}
	</style>
</head>
<body>
	<!-- Nota para practicar esta clase tienes que habilitar la opcion de permisos para aplicaiones
https://myaccount.google.com/security?pli=1#connectedapps
	 -->
	<div>
		<h2>Envio de correo</h2>
	<form action="enviar.php" method="POST"><input type="text" name="destino" placeholder="correo de destino"><br>
	<input type="text" name="asunto" placeholder="asunto"><br>
	<label for=""><u>Comentario:</u></label>
	<textarea name="area" id="" cols="30" rows="10"></textarea><br>
	<input type="submit" class="boton" value="Enviar" name="enviar">
	</form>
	
	</div>
	<!-- <p style="color: red;">hola desde php</p> -->
</body>
</html>



