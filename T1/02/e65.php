<?php 
	for ($i=0; $i < 10; $i++) { 
		$numero = mt_rand(1,100);
		if($i==9){
			echo "$numero";
		}else{
			echo "$numero, ";
		}
	}
	
 ?>