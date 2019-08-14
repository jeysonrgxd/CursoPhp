<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDO</title>
</head>
<body>
	<?php 
		$estamos = $_SERVER["PHP_SELF"];
		if (isset($_POST["ok"])) {
			$nom = $_POST["buscar"];
			try {
				$con = new PDO("mysql:host=localhost; dbname=prueba","root","");
				$con->exec("SET CHARACTER SET utf8");//ASIGNAMMOS LA CARACTERIZAION utf8
				$consulta = "SELECT * FROM productos WHERE NOMBREARTÍCULO = ?";
				$PDOstate = $con->prepare($consulta);//preparamos la consulsta y nos devuelve un oobjeto PDOstatement
				$PDOstate->execute(array($nom));//ejecutamos la consulta y asiganmos los parametros para dicha consulta. nos devuelve un boleano
				echo "<table border='1' align='center'>";
				while($fila = $PDOstate->fetch(PDO::FETCH_BOTH)){//sacamos los valores fila pr fila y lo guardamos en un array bien de tipo indexado o asociativo de acuerdo al parametro que le asignemos: FETCH_ASSOC, FECTCH_NUM, FETCH_BOTH 
					echo "<tr>";

						echo "<td>".$fila["NOMBREARTÍCULO"]."</td>
							  <td>". $fila["1"]. "</td>" ;

					echo "</tr>";
				}
				$PDOstate->closeCursor();// cerramos el cursor que recorre la tabla del recolset para ahorrar recursos
				echo "</table>";
			} catch (Exception $e) {
				die("error ". $e->GetMessage());
			}

			
		} else {?>
			<form action="<?php echo $estamos; ?>" method="POST">
				<input type="text" name="buscar" placeholder="Nombre de articulo">
				<input type="submit" name="ok" value="Buscar">

			</form>
		
		
<?php } 

?>

	 
</body>
</html>