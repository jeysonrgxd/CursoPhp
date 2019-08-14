<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <?php 

      include "encapsulacion.php";
      $toyota = new Coche();
      //la variable ruedas esta encapsulada y no se puede hacer estas lineas de codigo
      $toyota->ruedas = 6;
      echo "las ruedas es de ".$toyota->ruedas;
      //------------------------------------------------------------------------------







        /*
        include 'erencia.php';
        $ferrari = new Coche();
        $optimus = new Camion();

        $ferrari->dame_color("verde","A1");
        $optimus->dame_color("GRIS","OPTIMUS");

        echo "<hr> <h2>PROBANDO SOBREESCRIBIR</h2><be>";

        $ferrari->arrancar();
        $optimus->arrancar();
         */ 
    
    ?>
</body>
</html>

