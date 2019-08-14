<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		body{
			background-color: darkgray;
		}
		img{
			border: 2px solid black;
			border-radius: 5px;
			width: 600px;
			height: 600px;
		}

	</style>
</head>
<body>
	<?php 
		include 'datos.php';
	 ?>
	<center><img src="/intranet/uploads/<?php echo $imagen;?>" alt="Imagen del primer artiulo"></center>
	 
	
</body>
</html>