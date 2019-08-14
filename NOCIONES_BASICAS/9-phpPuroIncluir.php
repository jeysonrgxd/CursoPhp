<?php 
	if (isset($_POST["ok"])) {
		$a = $_POST["num1"];
		$b = $_POST["num2"];
		$ope = $_POST["operacion"];
				
		if (!strcmp("Suma",$ope)) {
				echo "La suma es ". ($a+$b);
			}
		if (!strcmp("Resta",$ope)) {
				echo "La Resta es ". ($a-$b);
			}
		if (!strcmp("Multiplicar",$ope)) {
				echo "La Multiplicacion es ". ($a*$b);
			}
		if (!strcmp("Dividir",$ope)) {
				if ($a !=0) {
					echo "La Divicion es ". ($a/$b);
				} else {
					echo "Error...";
				}
			
			}
		if (!strcmp("Aumentar",$ope)) {
				$a++;
				echo "el aumento es ". ($a);
			}
		if (!strcmp("Disminuir",$ope)) {
				$a--;
				echo "La disminucion es ". ($a);
			}
	}
	
 ?>