<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	form{
		padding: 0 10px 10px 10px;
		border: 1px solid black;
	}
		label{
			margin: 10px 0;
			display:block;
		}
	</style>
</head>
<body>

	<form action="guardar.php" method="POST">
		<h2>Formulario</h2>
		<label for="">Cliente:<input type="text" name="nombre"></label>
		<label for="">Numero de personas: <input type="text" name="cantidad"></label>
		<label for="">Adultos: <input type="text" name="adultos"></label>
		<label for="">Niños: <input type="text" name="ninios"></label>
		<label for="">Fecha: <input type="date" name="fecha"></label>
		<label for="">Descuento: <input type="text" name="descuento"></label>
		<input type="submit" name="boton" value="Enviar"><br><br>
		<div><a href="mostrar_datos.php">Mostrar datos</a></div>




	</form>
</body>
</html>