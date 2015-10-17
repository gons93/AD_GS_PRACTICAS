<?php 
	for ($i=0; $i < 100; $i++) { 
		$array[]=mt_rand(0,100);	
	}

	for ($i=0; $i < 100; $i++) { 
		printf("$array[$i], ");	
	}

	for ($i=1; $i < count($array); $i++) { 
		for ($j=0; $j < count($array)-$i; $j++) { 
			if ($array[$j]>$array[$j+1]) {
				$aux = $array[$j];
				$array[$j] = $array[$j+1];
				$array[$j+1] = $aux;
			}
		}
	}
	printf("<br/>");
	for ($i=0; $i < 100; $i++) { 
		printf("$array[$i], ");	
	}
 ?>