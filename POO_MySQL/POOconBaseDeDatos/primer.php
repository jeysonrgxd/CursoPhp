<?php 
	require 'DevuelveProductos.php';
	$con = new  DevuelveProductos();
	$resul = $con->getDatos();



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<?php 
			foreach ($resul as $clave) {
				echo"<tr>";
				foreach ($clave as $clave2 => $valor) {
					echo "<td>".$valor."</td>";
				}
				echo "</tr>";
				
			}
		 ?>
	</table>
</body>
</html>