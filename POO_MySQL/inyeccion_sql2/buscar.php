<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>inyeccion2</title>
</head>
<style>
	label{
		font-weight: bold;
	}
	input[type="submit"]{
		margin: 10px 0;
		width: 235px;
		height: 25px;
		cursor: pointer;
	}
</style>
<body>
	<h2>Buscar productos</h2>
	<hr>
	<form action="vaidar.php" method="POST">
		<table>
			<tr>
				<td><label for="buscartxt1">Codigo del producto</label></td>
				<td><input type="text" name="buscar1" id="buscartxt1"></td>
			</tr>
			<tr>
				<td><label for="buscartxt2">Pais del producto</label></td>
				<td><input type="text" name="buscar2" id="buscartxt2"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="ok" value="Buscar"></td>
				
			</tr>
		</table>
		
		
	</form>
</body>
</html>