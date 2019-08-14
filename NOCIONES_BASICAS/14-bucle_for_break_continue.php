<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejercicio4</title>
</head>
<body>
	<?php 
		for ($i = 0; $i<20; $i++ ){
			if($i==0){
				echo "no se puede realizar la operacion <br>";
				continue;
			}
			echo "10 / $i es = ". (10/$i)."<br>";

			if($i ==15){
				break;
			}
		}
		
		
	 ?>
</body>
</html>