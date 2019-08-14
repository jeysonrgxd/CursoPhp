<?php 
	$nombre = $_FILES["archivo"]["name"];
	$tipo = $_FILES["archivo"]["type"];
	$peso = ($_FILES["archivo"]["size"]/1000)."kb";
	$carp_temp = $_FILES["archivo"]["tmp_name"];
	$destino =$_SERVER["DOCUMENT_ROOT"]."intranet/uploads/{$nombre}";

	echo "nombre: {$nombre}<br> tipo: {$tipo}<br> pesa: {$peso}<br>";
	move_uploaded_file($carp_temp, $destino);
	try {
		$con = new PDO("mysql:host=localhost;dbname=prueba","root","");
		// $con->exec("SET CHARACTER SET UTF8");
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//apuntamos al archivo oea es como lo escojemos y le damos privilegios analizar privilegios en pagina de php.net
		// $apunta = fopen($destino, "r");
		// podemos usar la fucion $filesize($destino) para sacar tambien mediante la ubicacion final del documento el peso de dicho archivo.
		//leemos el archivo y su peso y lo convertimos en bits y lo hacemos que los caracteres se tomen encuenta
		// $archi_bit =addslashes(fread($apunta, $_FILES["archivo"]["size"]));
		$archi_bit=addslashes(file_get_contents($destino));
		$consulta = "INSERT INTO imagenes VALUES(0,'$nombre','$tipo','$archi_bit')";
		$PDOstate = $con->prepare($consulta);
		$ok=$PDOstate->execute();
		if($ok){
			echo "se guardo correctamente";
		}else{
			echo "ERROR EN EL GUARDADO";
		}

	} catch (Exception $e) {
		die("Error ".$e->Getmessage()." Linea: ".$e->GetLine());
	}


 ?>