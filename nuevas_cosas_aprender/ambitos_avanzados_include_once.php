<?php 
require_once 'clases_anonimas.php';
	$numero = 4;

	function suma(int $x, int $y):int{
		global $numero;

		return $x+$y+$numero;
	}

	echo suma(5,6)."<br>";

	$animal = new Animal();
	$perro = $animal->tipo_animal("perro","dog",4);
	$gato = $animal->tipo_animal("gato","cat",5);


	echo "<h2>El perro creado</h2><br><hr>". $perro->getTipo()."<br>".$perro->getNombre()."<br>".$perro->getPatas()."<hr>";
	echo "<h2>El gato creado</h2><br><hr>". $gato->getTipo()."<br>".$gato->getNombre()."<br>".$gato->getPatas()."<hr>";

	$persona1 = $persona("jeyson","masculino",23);
	$persona2 = $persona("andersson","masculino",22);
	$persona3 = $persona("stefany","femenino",19);

	echo "<strong>Estas son las personas ue fueron creadas por clases anonimas:</strong><br>";

	echo $persona1->getNombre()."<br>";
	echo $persona2->getNombre()."<br>";
	echo $persona3->getNombre()."<br>";





 ?>