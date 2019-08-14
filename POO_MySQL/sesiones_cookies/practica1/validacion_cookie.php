<?php 
	$idioma = $_GET["idioma"];

	setcookie("idiomas",$idioma,time()+3600);

	if(!isset($_GET["idioma"])){
		header("location:eligir_pais.php");
	}
	else if($idioma =="es"){
		header("location:index_spanish.php");
	}else if($idioma =="in"){
		header("location:index_inglish.php");
	}
	
 ?>