<?php 
	class Coche{
		//private encapsulamos las variables para que cuando instaciemos un objeto de esta clase
		//no se pueda acceder a estas variables ni modificarles si es que no es por getter and setter
		private $ruedas;
		private $motor;
		private $peso;

		function Coche(){
			$this->ruedas=4;
			$this->motor=1600;
			$this->peso=1000;

		}

	}


 ?>