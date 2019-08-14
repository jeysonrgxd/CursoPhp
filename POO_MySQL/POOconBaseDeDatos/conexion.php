b<?php 
	require 'config.php';

	class Conexion{
		protected $conexion;

		public function Conexion(){
			$this->conexion = new mysqli(BDHOST,BDUSER,BDPASS,BDNAME);
			if($this->conexion->connect_errno){
				echo "Fallo la conexion ".$this->conexion->connect_error;
				return;
			}
			$this->conexion->set_charset(BDCARAC);
		}



	}
	
 ?>