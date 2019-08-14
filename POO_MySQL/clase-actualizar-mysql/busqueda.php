<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>actualizar</title>
</head>
<style>
	label{
		font-weight: bold;
	}
</style>
<body>
	<h2>Busquda de articulo</h2>
	<hr>
	<form action="datos.php" method="POST">
		<label for="buscar">Nombre</label>
		<input type="text" id="buscar" name="buscar">
		<input type="submit" name="ok" value="Buscar">
	</form>
</body>
</html> 