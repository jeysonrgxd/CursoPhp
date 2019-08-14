<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>insertar datos</title>
</head>
<style>
	body{
		background: #FFCD94;
	}
	.principal{
	 		width: 400px;
	 		height: 250px;
	 		border: 1px solid black;
	 		
	 	}

</style>
<body>
	<center>
		<h2>ALTA DE ARTICULOS NUEVOS</h2>
		<div class="principal">
		<br>
		<form action="validar.php" method="POST">
			<table>
				<tr>
					<td> <label for="c_art">Codigo Articulo</label> </td>
					<td> <input type="text" name="c_art" id="c_art"> </td>
				</tr>
				<tr>
					<td> <label for="seccion"> Seccion </label> </td>
					<td> <input type="text" name="seccion" id="seccion"> </td>
				</tr>
				<tr>
					<td> <label for="nom">Nombre Articulo</label> </td>
					<td> <input type="text" name="nom_art" id="nom"> </td>
				</tr>
				<tr>
					<td> <label for="precio">Precio</label> </td>
					<td> <input type="text" name="precio" id="precio"> </td>
				</tr>
				<tr>
					<td> <label for="fecha">Fecha</label> </td>
					<td> <input type="text" name="fecha" id="fecha"> </td>
				</tr>
				<tr>
					<td> <label for="importado">Importado</label> </td>
					<td> <input type="text" name="importado" id="importado"> </td>
				</tr>
				<tr>
					<td> <label for="pais">Pais de Origen</label> </td>
					<td> <input type="text" name="pais" id="pais"> </td>
				</tr>
				<tr>
					<td align="center"> <br><input type="submit" value="Enviar" name="enviar"> </td>
					<td align="center"> <br> <input type="submit" value="Borrar" name="eliminar"> </td>
				</tr>
			</table>
		</form>
	</div>
	</center>


	
</body>
</html>