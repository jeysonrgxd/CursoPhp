<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
		include("validacion.php");//me trae el codigo de la otra pagina pero ojo este ya pertenece a este fichero
		//es como si validacion.php este escrito en esta pagina
	 ?>
 <?php 
 		if(!isset($_SESSION["nombre"])){
 			include("formulario.php");//me tare el formulario que una vez traido con include este ya pertenece a este fichero es como si estuviera escrito aqui
 		}
  ?>
	<h2>Contenido de la web</h2>
	 <table class="tabla2">
	 	<tr>
	 		<td><img src="../imagenes/paisage1.jpg"  width="250px" height="150px" alt=""> </td>
	 		<td><img src="../imagenes/paisage2.jpg"  width="250px" height="150px" alt=""></td>
	 	</tr>
	 	<tr>
	 		<td><img src="../imagenes/pasage3.jpg"  width="250px" height="150px" alt=""></td>
	 		<td><img src="../imagenes/pasage4.jpg"  width="250px" height="150px" alt=""></td>
	 	</tr>
	 </table>
</body>
</html>