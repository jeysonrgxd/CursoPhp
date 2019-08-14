<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 	
	$conexion = new mysqli("localhost", "root","","prueba"); //instaciamos un objeto de la clase mysqli para heredar atributos propiedades y metodos
	if($conexion->connect_errno){//utilizamos la propiedad para verificar si hay errores o no
		echo "La conexion fallo".$conexion->connect_errno;//imprimimos si lo hay con el tipo de error
		exit();
	}else{
		echo "conexion existosa";
	}

	$conexion->set_charset("utf8");//invocamos el metodo de la caracterizacion de escritura utf-8 para las hacer las consultas con comillas o ñ
	$query = "SELECT * FROM PRODUCTOs";

	$resul=$conexion->query($query);//insertamos el query de esta manera invocando atraves del objeto instanciado de la clase mysqli

	if($conexion->errno){//comprobamos que no hay error con la propiedad ya vista
		die("<br>".$conexion->error);//si lo hay imprimos el error
	}
	//puede ser $resul->fetch_assoc() solo que este nos devuelve un array asosiativo a las columnas devueltas por la consulta
	while($fila = $resul->fetch_array()){//invocamos al metodo fetch_array el cual nos devuel array indexado y asociativo. atraves el objeto recolset que nos devulve el query;
		echo"<br>". $fila['CÓDIGOARTÍCULO']."<br>";
	}
	$conexion->close();//cerramos la conexion de mysql con el metodo del objeto
 ?>
</body>
</html>