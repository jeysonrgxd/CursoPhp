<?php 
		session_start();
		if(!isset($_SESSION["nombre"])){
			header("location:Login.php");
		}else{ ?>
		<h1>Menu2</h1>
			<h2><?php echo"Bienvenido ". $_SESSION["nombre"]." tu DNI es: ".$_SESSION["dni"]."<br>"."Tu telefono es: ".$_SESSION["telefono"];?></h2>
			<p><a href="cerrar_secion.php">Cerrar sesion</a></p>
			<p><a href="usuarios_registrados.php">Regresar</a></p>
			

		
	<?php } ?>	