<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		// if (isset($_GET["val"])) {
		// 	$primer=$_GET["num1"];
		// 		try {

		// 		$con = new PDO("mysql:host=localhost; dbname=prueba","root","");
		// 		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		// 		$con->exec("SET CHARACTER SET utf8");
		// 		$consulta = "SELECT * FROM productos LIMIT $primer,5";
		// 		$PDOstate=$con->prepare($consulta);
		// 		$PDOstate->execute();
		// 		while($resultado = $PDOstate->fetch(PDO::FETCH_NUM)){
		// 			echo "<strong>Codigo: </strong>".$resultado[0]." <strong>Seccion: </strong>".$resultado[1]."<strong> Nombre: </strong>".$resultado[2]."<br>";
		// 		}

		// 	} catch (Exception $e) {
		// 		die("Error.! ".$e->getMessage()." Linea: ".$e->getLine());
		// 	}
		// }else{
				// aqui va codigo......
			// }
				try {
					if(!isset($_GET["val"])){
						$numpagina=1;
					}else{
						$numpagina=$_GET["num1"];
					}

				$base = new PDO("mysql:host=localhost; dbname=prueba","root","");
				$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$base->exec("SET CHARACTER SET utf8");
				$cantidad_mostrar=5;
				$mostrar_desde = ($numpagina-1)*$cantidad_mostrar;
				$consulta = "SELECT * FROM productos";
				$PDOstate=$base->prepare($consulta);
				$PDOstate->execute();
				$num_filas=$PDOstate->rowCount();
				$pagina_mostrar=ceil($num_filas/$cantidad_mostrar);
				echo "numero de fila es: $num_filas <br> se muestra de $cantidad_mostrar <br> paginas: $pagina_mostrar<br>";
				$consulta2="SELECT * FROM productos LIMIT $mostrar_desde,$cantidad_mostrar";
				$PDOstate=$base->prepare($consulta2);
				$PDOstate->execute(array());
				echo "<table border='1'>";
				while($resultado = $PDOstate->fetch(PDO::FETCH_NUM)){
					echo "<tr>
							<td><strong>Codigo: </strong></td>"."<td>".$resultado[0]."</td><td><strong>Seccion: </strong></td><td>".$resultado[1]."</td><td><strong> Nombre: </strong></td><td>".$resultado[2]."</td>
					</tr>";
				}
				echo "</table>";
				$PDOstate->closeCursor();
			} catch (Exception $e) {
				die("Error.! ".$e->getMessage()." Linea: ".$e->getLine());
			}	
		
		
	 ?>
	 <?php 
	 	for($i=1; $i<=$pagina_mostrar; $i++):?>
	 	<a href="index.php?num1=<?php echo $i; ?> & val=pagi"><?php echo $i; ?></a>
	
	<?php endfor ?>
	 	


	  
	
</body>
</html>