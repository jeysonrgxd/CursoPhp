<?php 
$resul1="";
$resul2="";
	for($i=0;$i<437;$i++){
		if($i%2==0){
			$dia = rand(1,31);
			$mes = rand(1,12);
			$ano = 2017;
			
			if($mes==12){
				$resul1=$resul1."{$dia}/{$mes}/{$ano}<br>";
			}else{
				$resul1=$resul1."{$dia}/{$mes}/{$ano}<br>";

			}

				
		}else{
			$dia2 = rand(1,31);
			$mes2 = rand(1,5);
			$ano2 = 2018;

			if($mes==12){
				$resul2=$resul2."{$dia2}/{$mes2}/{$ano2}<br>";
			}else{
				$resul2=$resul2."{$dia2}/{$mes2}/{$ano2}<br>";

			} 
		}

	}
		echo "{$resul1}";
		echo "<hr>";
		echo "{$resul2}<br><br>";	

		echo "<strong>$i</strong>";
 ?>