<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		h2{
			text-align: center;
			font-family: sans-serif;

		}
		form{
			background: orange;
			width:300px;
			height: 150px;
			padding: 10px 0 0 16px;
			border-style: dotted;
			margin: auto;
		}
		td{
			padding: 10px;
		}
		th{
			text-align: right;
			font-family: sans-serif;
			font-weight: bold;


		}
		#boton{
			width: 150px;
			height: 25px;
			font-family:sans-serif;
			font-weight: bold;
			font-size: 15px;
		}

	</style>
</head>
<body>
	<h2>INTRODUCE TUS DATOS</h2>
	<form action="validar.php" method="POST">
		<table>
			<tr>
				<th>Login:</th>
				<td><input type="text" name="usu"></td>
			</tr>
			<tr>
				<th>Password:</th>
				<td><input type="text" name="cont"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" id="boton" name="boton" value="LOGIN"></td>
			</tr>
		</table>
	</form>
</body>
</html>