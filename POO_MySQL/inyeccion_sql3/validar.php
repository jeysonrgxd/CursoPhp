<?php 
	$con = mysqli_connect("localhost","root","","prueba");
	mysqli_set_charset($con,"utf8");

	$cod = $_POST["c_art"];
	$sec = $_POST["seccion"];
	$articulo = $_POST["nom_art"];
	$precio =$_POST["precio"];
	$fecha = $_POST["fecha"];
	$import = $_POST["importado"];
	$pais = $_POST["pais"];

	if (mysqli_connect_errno()) {
		echo "Error de conexion";
		exit();
	}
	$consulta = "INSERT INTO productos (CÓDIGOARTÍCULO,SECCIÓN,NOMBREARTÍCULO,PRECIO,FECHA,IMPORTADO,PAÍSDEORIGEN)
					VALUES (?,?,?,?,?,?,?)";
	$stmt = mysqli_prepare($con,$consulta);
	$ok = mysqli_stmt_bind_param($stmt,"sssssss",$cod,$sec,$articulo,$precio,$fecha,$import,$pais);
	$ok = mysqli_stmt_execute($stmt);

	if($ok){
		echo "<script> alert('se inserto producto nuevo'); 
							location.href='insertar.php';		
				</script>";
	}else{
		echo "Error no se pudo guardar informacion nueva";
	}



 ?>