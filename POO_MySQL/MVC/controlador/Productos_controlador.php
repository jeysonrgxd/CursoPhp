<?php 
	require_once("modelo/Productos_modelos.php");
	$productos = new Productos_modelo();
	$registro = $productos->get_productos();
	require_once("vista/Productos_view.php");
 ?>