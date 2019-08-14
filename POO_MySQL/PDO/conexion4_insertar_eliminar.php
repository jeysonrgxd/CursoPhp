<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>insertar-elliminar</title>
</head>
<style>
	div{
		margin: auto;
		border: 1px solid black;
		width: 300px;
		height: 220px;
		background: #F1E526;
		font-weight: bold;
	}
	h3{
		text-align: center;	
	}
</style>
<body>
	<?php 
		if (isset($_POST["ok"])) {
			$dni = $_POST["dni"];
			$nombre = $_POST["nombre"];
			$telefono = $_POST["telefono"];
			$usuario = $_POST["usuario"];
			$contrasena = $_POST["contrasena"];

			$con = new PDO("mysql:host=localhost; dbname=prueba","root","");
			$con->exec("SET CHARACTER SET utf8");
			$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			// $consulta = "INSERT INTO usuarios VALUES(:dni,:nom,:tel,:usu,:pass)";
			$consulta2 = "DELETE FROM usuarios WHERE dni = :dni";
			$pdostmt = $con->prepare($consulta2);
			// $ok = $pdostmt->execute(array("dni"=>$dni,"nom"=>$nombre,"tel"=>$telefono,"usu"=>$usuario,"pass"=>$contrasena));
			$ok = $pdostmt->execute(array("dni"=>$dni));
			if ($ok) {
				echo "elimminado con existo";
			} else {
				echo "NO se pudo eliminar ";
			}
			$pdostmt->closeCursor();
			
		} else {?>
			<div>
				<h3><u>Formulario</u></h3>
				<form action="" method="POST">
					<table>
						<tr>
							<td>DNI</td>
							<td><input type="text" name="dni"></td>
						</tr>
						<tr>
							<td>NOMBRE</td>
							<td><input type="text" name="nombre"></td>
						</tr>
						<tr>
							<td>TELEFONO</td>
							<td><input type="text" name="telefono"></td>
						</tr>
						<tr>
							<td>USUARIO</td>
							<td><input type="text" name="usuario"></td>
						</tr>
						<tr>
							<td>CONTRASEÑA</td>
							<td><input type="text" name="contrasena"></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="ok" value="Aceptar"></td>
						</tr>
					</table>
				</form>
			</div>

	 
<?php } ?>

</body>
</html>