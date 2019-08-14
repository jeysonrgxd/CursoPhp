<?php 
	 class Coche{ //declaremos una clase
		public $ruedas;
		var $color;
		var $motor;

		function Coche(){//declaramos su constructor
			$this->ruedas=4;
			$this->color="";
			$this->motor=1600;

		}	
	//METODOS DE LA CLASE COCHE----------------------------------
		function arrancar(){

			echo "Estoy Arrancando <br>";
		}

		function girar(){

			echo "Estoy Girando <br>";
		}

		function frenar(){

			echo "Estoy frenando <br>";
		}

		function dame_color($col){//METODO CON PARAMETRO
			$this->color = $col;//asignamos a ala variable de la clase un valor
			echo "El color del auto es: ".$this->color."<br>";

		}
	//--------------------------------------------------------------
	}

	class Camion{

		var $ruedas;
		var $color;
		var $motor;

		function Camion(){
			$this->ruedas=8;
			$this->color="Plomo";
			$this->motor=2600;

		}

		function velocidad(){

			echo "El camion es mas lento que un auto pero es mas
					fuerte y pesado<br>";
		}

		function frenar(){

			echo "El camion cuand frena deja mancha en la pista <br>";
		}

		function girar(){

			echo "El camion cuando gira tenemos que hacerlo ccon cuidado por que
					es muy peligroso<br>";
		}

	}	

 ?>