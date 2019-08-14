<?php 
	require 'conexion.php';

	class Transacciones extends Conexion{

		public function Transacciones(){
			parent::__construct();
		}

		public function mostrar_registro($nombre){
			$consulta = "SELECT * FROM usuarios where nombre = '$nombre'";
			$PDOstate=$this->con->prepare($consulta);
			$PDOstate->execute();//usamos sin pasar array cuando no ponemos parametros ?

			//PUEDES PASARLE PDO::FETCH_NUM, FETCH_ASSOC FETCH_BOTH o dejarolo vacion lo cual nos devuelve las dos formar indexado y asociativo
			$resultado = $PDOstate->fetchAll();
			return $resultado;


		}
		public function mostrar_registro2(){
			$consulta = "SELECT * FROM usuarios";
			$PDOstate=$this->con->prepare($consulta);
			$PDOstate->execute(array());
			// una manera de pasar los valores al index con pdo usando array y un contador para
			//almacenarlos
			/*
			$i=0;
			while($resultado = $PDOstate->fetch(PDO::FETCH_ASSOC)){
				$ar[$i]=$resultado["dni"];

				$i++;
			}
			return $ar;
			*/
			//metodo 2 pasar todo el PDOstate para sacarle los datos en la principal
			return $PDOstate;
		}
	}

 ?>