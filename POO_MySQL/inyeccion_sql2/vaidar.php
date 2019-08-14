<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$var1 = $_POST["buscar1"];
	$var2 = $_POST["buscar2"];


	$con = mysqli_connect("localhost", "root","","prueba");
	mysqli_set_charset($con,"utf8");

	if(mysqli_connect_errno()){
		echo "Error de conexion..";
		exit();
	}

	$consulta = "SELECT CÓDIGOARTÍCULO,SECCIÓN,NOMBREARTÍCULO,PRECIO FROM productos WHERE PAÍSDEORIGEN = ? and CÓDIGOARTÍCULO = ?";
	$stmt = mysqli_prepare($con,$consulta); //preparamos la consulta y nos devuelve un objeto stmt que sera utilizado muucho
	$ok= mysqli_stmt_bind_param($stmt,"ss",$var2,$var1);//asosiamos el parametro con ? con lo que mandamos por el formulario y tambien resive el objeto stmt
	$ok = mysqli_stmt_execute($stmt);//ejecutamos la consulta enviandole el objeto stmt nos devuelve true o false
	if($ok == false){
		echo "error en la consulta";
	}else{
		//obtenemos el resultset y lo asosiamos con parametros de acuerdo alas columnas que nos trajo la consulta
		mysqli_stmt_bind_result($stmt, $codigo,$seccion,$nombre,$precio);
		echo "Resultado encontrados<br>";
		//utlizamos un bucle para recorrer las filas que nos trae la consulta y el cual la funcion recive el ojeto stmt 
		while (mysqli_stmt_fetch($stmt)) {
			//al imprimirlas las llamamos con el nombre que pasamos para las columnas
			echo $codigo." ".$seccion." ".$nombre." ".$precio."<br>";
		}
		//cerramos el objeto de conexion pasandole el objeto
		mysqli_stmt_close($stmt);
	}


 ?>
</body>
</html>
