<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>clases_php</title>
</head>
<body>
	<?php 
		class Coche{
			var $ruedas;
			var $color;
			var $motor;

			function Coche(){
				$this->ruedas=4; //$this para haser mencion de la clase y entrar asus atributos
				$this->color="";
				$this->motor=1600;

			}	

			function arrancar(){

				echo "Estoy Arrancando <br>";
			}

			function girar(){

				echo "Estoy Girando <br>";
			}

			function frenar(){

				echo "Estoy frenando <br>";
			}

			function dime_color($co,$no){
				$this->color = $co;
				echo "El color de $no es: ".$this->color."<br>";

			}

		}
		$mazda = new Coche(); //instanciamos un objeto de la clase coche
		$ferrari = new Coche();
		$toyota = new Coche();

		$mazda->girar();//asi llamamos ala funcion mediante un objeto
		echo  $ferrari->ruedas;//y asi imprimimos un valor de un atributo de clase mediante una instancia
		echo "<hr>";
		echo "<h2>Aora imprimimos los colores de los autos: </h2><br>";

		$mazda->dime_color("Verde","Mazda");
		$ferrari->dime_color("Rojo", "Ferrari");
		$toyota->dime_color("Negro", "Toyota");

		echo "<br>1° ".$mazda->color;
		echo "<br>2° ".$ferrari->color;
		echo "<br>3° ".$toyota->color;
		



	 ?>
</body>
</html>