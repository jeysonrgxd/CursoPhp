<?php 
	require_once("modelo/Personas_modelos.php");
	$productos = new Personas_modelo();
	$registro = $productos->get_personas();
	require_once("vista/Personas_view.php");
 ?>