<?php 
	$numero1= mt_rand(1,100);
	$numero2= mt_rand(1,100);
	$numero3= mt_rand(1,100);

	echo "$numero1, $numero2, $numero3";
	
	if ($numero1>$numero2) {

		if($numero1>$numero3){
			$mayor=$numero1;

			if ($numero2>$numero3) {
				$mediano=$numero2;
				$menor=$numero3;
			}else{
				$mediano=$numero3;
				$menor=$numero2;
			}

		}else{
			$menor=$numero2;
			$mediano=$numero1;
			$mayor=$numero3;
		}

	}elseif ($numero1<$numero2) {
		if($numero1<$numero3){
			$menor=$numero1;
			if ($numero2<$numero3) {
				$mediano=$numero2;
				$mayor=$numero3;
			}else{
				$meiano=$numero3;
				$mayor=$numero2;
			}
		}else{
			$mediano=$numero1;
			$menor=$numero3;
			$mayor=$numero2;
		}
	}else{
		$menor=$numero1;
		$mediano=$numero2;
		$mayor=$numero3;
	}

	echo "    $menor, $mediano, $mayor";
 ?>