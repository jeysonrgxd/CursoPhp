<?php 
	require 'DevuelveProductos.php';
	$con = new DevuelveProductos();
	$lugar=$_SERVER["PHP_SELF"];
 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	form{
		background: red;
		width: 300px;
	}
</style>
<body>
	<?php 
		if ( isset($_POST["ok"]) ) {
			$clave  = $_POST["codigo"];
			$resul = $con->getDatosbusc($clave);
			 echo "<table border = '1'>";
				foreach ($resul as $clave) {
					echo"<tr>";
					foreach ($clave as $clave2 => $valor) {
						echo "<td>".$valor."</td>";
					}
					echo "</tr>";	
				}
			echo "</table>";
			}
			else{?>
	<center>
		<form action="<?php echo $lugar; ?>" method="POST">
			<h2><u>Buscar articulo</u></h2>
			<table>
				<tr>
					<td><label for="">Codigo de articulo</label></td>
					<td><input type="text" name="codigo"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><br><input type="submit" name="ok" value="Buscar"></td>
					</tr>				
			</table>
		</form>
	</center>
<?php } ?>
</body>
</html>