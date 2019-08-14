<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>operadores</title>
</head>
<body>
	<form action="" method="POST">
		Numero 1: <input type="text" name="num1">
		Numero 2: <input type="text" name="num2">
		<select name="operacion" id="">
			<option value="Suma">Sumar</option>
			<option value="Resta">Restar</option>
			<option value="Multiplicar">Multiplicar</option>
			<option value="Dividir">Dividir</option>
			<option value="Aumentar">Aumentar</option>
			<option value="Disminuir">Disminuir</option>
		</select><br>
		<input type="submit" name="ok" value="Operar">

	</form>
	<?php  
		include("9-phpPuroIncluir.php")
	?>
</body>
</html>