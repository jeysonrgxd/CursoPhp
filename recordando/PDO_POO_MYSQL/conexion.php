<?php 
	require 'config.php';
	class Conexion
	{
		protected $con;
		function Conexion()
		{
			//obtenemos la variables constante de configuracion
			$host = bdhost;
			$user = bduser;
			$pass = bdpass;
			$name = bdname;
			try {
			$this->con = new PDO("mysql:host=$host; dbname=$name",$user,$pass);
			$this->con->exec("SET CHARACTER SET utf8");
			$this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			} catch (Exception $e) {
				die("Error de conexin " .$e->GetMessage()." Linea: ".$e->GetLine()." Codigo: ". $e->GetCode());
			}

		}
	}

 ?>
