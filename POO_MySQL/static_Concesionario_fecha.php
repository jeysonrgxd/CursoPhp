<?php 
	class Concecionario{
		private $precio_base;
		private static $ayuda = 0;//variable private static para que solo le pertenesca a la clase y no asus instancias y seasolo usada en la clase ni invocada desde otro fichero para cambiar su valor

		//contructor que recive un parametro y lo evalua para inicializar la variable de clase $precio_base
		function Concecionario($gama){
			if ($gama == "urbano") {
				$this->precio_base=10000;
			}
			else if ($gama == "compacto") {
				$this->precio_base=20000;
			}
			else if ($gama == "berlina"){
				$this->precio_base=30000;
			}

		}//fin del constructor

		//metodo de la clase para elegir climatizador y agregar mas precio ala variable
		function climatizador(){
			$this->precio_base+=2000;

		}
		//metodo de la clase para elegir navegador_gps y agregar mas precio ala variable
		function navegador_gps(){
			$this->precio_base+=250;;
		}

		//metodo de la clase para elegir la tapiceria y agrega mas precio ala variable
		function tapiceria_cuero($color){
			if($color == "blanco"){
				$this->precio_base+=3000;
			}
			else if($color =="beige"){
				$this->precio_base +=3500;
			}
			else{
				$this->precio_base+=5000;
			}

		}

		function precio_final(){
			//self:: <> asi llamamos ala variable statica de la clase
			$total = $this->precio_base-self::$ayuda;
			return $total;
		}

		static function descuento(){
			if(date("d-m-y")>"01-12-17"){
				self::$ayuda=4000;
			}
		}

	




	}
?>