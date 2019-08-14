<?php 
	require 'conexion.php';

	class DevuelveProductos extends conexion{
		public function Productos(){
			parent::_construct();
		}

		public function getDatos(){
			$result=$this->conexion->query("SELECT * FROM productos");
			$array = $result->fetch_all(MYSQL_ASSOC);
			return $array;
		}

		public function getDatosbusc($clave){
			$result =$this->conexion->query("SELECT * FROM productos WHERE CÓDIGOARTÍCULO = '$clave'");
			$array = $result->fetch_all(MYSQL_ASSOC);
			return $array;
		}

	}

 ?>