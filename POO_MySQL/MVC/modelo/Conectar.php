<?php 
		class Conexion{
		//metodo estatico para poder llamarlo solo con el nombre de la clase sin isntanciarla
		public static function conectar(){
		 	try {
		 		$con = new PDO("mysql:host=localhost; dbname=ejemplo","root","");
		 		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		 		$con->exec("SET CHARACTER SET utf8");
		 	} catch (Exception $e) {
		 		die("Errro".$e->getMessage());
		 		echo "Linea: ".$e->getLine();
		 	}
		 	return $con;
		}

	}
 ?>