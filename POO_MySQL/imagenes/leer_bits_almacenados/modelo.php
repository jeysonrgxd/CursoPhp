<?php 
function traerimagen(){

	$con = mysqli_connect("localhost","root","","prueba");
	$imagenes=array();

	if(mysqli_connect_errno()){
		echo "error en la conexion";
		exit();
	}
	$consulta = "SELECT tipo,archivo FROM imagenes";
	$query = mysqli_query($con,$consulta);

	while($resultado = mysqli_fetch_array($query,MYSQL_ASSOC)):
		$imagenes[]=$resultado;
	endwhile;

	return $imagenes;
}
	
 ?>