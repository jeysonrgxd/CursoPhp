<?php 
	class Productos_modelo{
		private $conexion;
		private $datos;

		public function __construct(){
			require_once("modelo/Conectar.php");
			$this->conexion=Conexion::conectar();
			$this->datos = array();//creamos un array vacio
		}

		public function get_productos(){
			//usamos la funcion query y le pasaos la consulta para que  nos devuelva la informacion en un array
			$consulta = $this->conexion->query("SELECT * FROM productos");
			//rrecoremos con fetch sacando fila por fial del array y lo guardamos en la variable de clase datos[]
			while($resultado = $consulta->fetch(PDO::FETCH_ASSOC)){
				$this->datos[]=$resultado;
			}
			//recordar devolver dato para poder utilizarlo
			return $this->datos;

		}
	}

 ?>