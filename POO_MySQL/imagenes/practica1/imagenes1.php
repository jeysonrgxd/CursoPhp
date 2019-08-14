<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- cuando subimos imagenes al servido se pone la propiedad enctype con su valor "multipart/form-data". un input type file para escojer la imagen y un tamaño -->
	<form action="datosImagen.php" method="POST" enctype="multipart/form-data">
		<label for="">Imagen</label><input type="file" name="imagen" size="10000">
		<input type="submit" name="guardar" value="Guardar">
	</form>
 	
</body>
</html>