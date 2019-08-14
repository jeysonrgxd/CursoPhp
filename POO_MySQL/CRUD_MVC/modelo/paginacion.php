<?php 
	require_once 'modelo/Conectar.php';
	$base=Conexion::conectar();
	// -----------------------paginacion------------------------------------
		if(!isset($_GET["val"])){
			$numpagina=1;
		}else{
			$numpagina=$_GET["num1"];
		}

		$cantidad_mostrar=5;
		$mostrar_desde = ($numpagina-1)*$cantidad_mostrar;
		$consulta = "SELECT * FROM datospersonales";
		$PDOstate=$base->prepare($consulta);
		$PDOstate->execute();
		$num_filas=$PDOstate->rowCount();
		$pagina_mostrar=ceil($num_filas/$cantidad_mostrar);
		// --------------------------------------


	

 ?>