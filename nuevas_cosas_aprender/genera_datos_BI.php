<?php 
echo "<table border='1'>";
	$forma = ["EFECTIVO","TARJETA"];
	for ($i=1; $i <= 399; $i++) { 
		$num = rand(1,150);
		// if($i>0 && $i<10){
		// 	echo "insert into ALMACEN values('G00{$i}','F00{$i}','{$num}')<br>";
		// }else if($i>=10 && $i<100){
		// 	echo "insert into ALMACEN values('G0{$i}','F0{$i}','{$num}')<br>";

		// }else if($i>=100 && $i<=997){
		// 	echo "insert into ALMACEN values('G{$i}','F{$i}','{$num}')<br>";
		// }
// ----------------------------------------------

		// if($i%2==0){
		// 	echo "TC01<br>";
		// }else{
		// 	echo "TC02<br>";
		// }
			if($num<=20){
		echo "<tr>";
				echo "<td>S/ {$num}.00</td><td>{$forma[0]}</td>";
		echo "</tr>";
			}else{
				$num2 = rand(0,1);
				echo "<tr>";
					echo "<td>S/ {$num}.00</td><td>{$forma[$num2]}</td>";
				echo "</tr>";
			}
	}
echo "</table>";

 ?>