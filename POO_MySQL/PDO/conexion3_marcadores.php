<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>marcadores</title>
</head>
<style>
	table{
		margin: auto;
		background: #DDF48E;
	}
</style>
<body>
	<?php 
		$estamos = $_SERVER["PHP_SELF"];
		if(isset($_POST["ok"])){
			$seccion = $_POST["seccion"];
			$pais = $_POST["pais"];

			try {
				$con = new PDO("mysql:host=localhost; dbname=prueba", "root","");
				$con->exec("SET CHARACTER SET utf8");
				// LE PASAMOS POR MARCADORES LO CUAL NOS AOBLIGA EN EL EXECUTE ACER N ARRAY ASOSIATIVO
				$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//nos asigna propiedades al objeto excepcion. propiedades que se le otorgo al objeto Exception y podemos imprimir dichas propiedades
				$consulta = "SELECT * FROM producto WHERE SECCIÓN = :sec AND  PAÍSDEORIGEN = :pai";
				$PDOstate = $con->prepare($consulta);
				$ok=$PDOstate->execute(array(":sec"=>$seccion,":pai"=>$pais));//asignamos la clave y valor al array asosciativo de acuerdo alos parametros de la consulta que es la clave y el valor es los campos rescatados del formulario
				echo "<table border='1'>";
					while($fila=$PDOstate->fetch(PDO::FETCH_BOTH)){//usamos FETCH_BOTH PARA TENER INDEXSADO Y ASOCIATIVOS
						echo "<tr>";
							echo "<td>". $fila["SECCIÓN"] ."</td>";
							echo "<td>". $fila["NOMBREARTÍCULO"] ."</td>";
							echo "<td>". $fila["PRECIO"] ."</td>";
						echo "</tr>";
					}
				echo "</table>";
				$PDOstate->closeCursor();

			} catch (Exception $e) {
				// podemos consultar mas propiedades y inprimirlas. investigando mas en php.net
				die( "Error en la linea ".$e->getLine()."<br> El codigo de la linea ".$e->getCode());

			}

			
		} else {?>
			<form action="<?php echo $estamos; ?>" method="POST">
				<input type="text" name="seccion" placeholder="SECCION"><br>
				<input type="text" name="pais" placeholder="PAIS"><br><br>
				<input type="submit" name="ok" value="Buscar" >

			</form>
		
		
<?php } 

?>

	 
</body>
</html>