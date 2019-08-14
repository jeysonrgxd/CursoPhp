<?php 
	require "config.php";

	class Conexion{
		protected $con;

		function Conexion(){
			$this->con=new mysqli(BD_HOST,BD_USER,BD_CONTRA,BD_NAME);
			if($this->con->connect_errno){
				echo "fallo la conexion" .$this->con->connect_error;
				return;
			}
			$this->con->set_charset(BD_CHARACTER);
		}
	}
	
 ?>