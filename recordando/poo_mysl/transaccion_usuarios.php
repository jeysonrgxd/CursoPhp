<?php 
	require "conexion.php";

	class Transaccion extends Conexion{

		public function Transaccion(){
			parent::__construct();

		}

		public function registro(){
			$recol=$this->con->query("SELECT * FROM usuarios");
			$resultado=$recol->fetch_all(MYSQLI_ASSOC);
			
			return $resultado;

		}
	}


 ?>