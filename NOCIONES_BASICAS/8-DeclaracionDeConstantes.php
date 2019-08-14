<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<a target="_blank" href="http://php.net/manual/es/language.constants.predefined.php">Link de constantes predefinidas comunidad php</a>
<br>
<br>
<br>
<br>
<br>

  <?php
  //se define una constante de esta manera con la funcion define("nombre de constante", valor, y si quieres true o false) el true nos sirva para poder llamar a  esta constante sin escribirlo con mayuscula como lo definimos tambien nos permite modificar dicha constante ciempre y cuando lleve el true pero no es recmendado ya que esta es un constante
  	define("NOMBRE", "JOSE", true);
  	define("EDAD",22);
//no podemos meter la constante en el string al imprimir como si podiamos con las vaiables normales, tenemos que concatenarlas
  	echo "El nombre es: ". NOMBRE . " su edad es: " . EDAD . "<br>";
  	echo "esta linea es: " . __LINE__; 

   ?>
	
</body>
</html>