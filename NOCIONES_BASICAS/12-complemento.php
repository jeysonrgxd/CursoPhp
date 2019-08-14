<?php 
	header('Content-Type: text/html; charset=ISO-8859-1');
	if (isset($_POST["ok"])) {
		$n = $_POST["nom"];
		$e = $_POST["edad"];
		echo valida_edad($n,$e);
	}

	function valida_edad($n,$e){
		$rpta ="";
		switch (true){
			case $e<=12:
				$rpta = "eres un ninio $n";	
				break;
			case $e<=16:
				$rpta = "eres un adolecente $n";
				break;
			case $e<=25:
				$rpta = "eres joven $n";
				break;
			case $e<=35:
				$rpta = "eres adulto Sr.$n";
				break;
			case $e<=50:
				$rpta = "eres mduro Sr.$n";
				break;
			case $e<=70:
				$rpta = "eres viejo Sr.x2 $n";
				break;
			default:
				$rpta = "no ingresaste una edad apropiada o quisas tengas suerte y vives tanto";
		}
		return $rpta;
	}
 ?>