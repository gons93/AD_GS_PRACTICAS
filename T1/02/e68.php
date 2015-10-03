<?php
	$numero1 = mt_rand(-100,100);
	$numero2 = mt_rand(1,100);

	$suma= $numero1+$numero2;
	$resta = $numero1-$numero2;
	$multiplicacion = $numero1*$numero2;
	$division = $numero1/$numero2;
	$resto = $numero1%$numero2;
	$opuesto = -$numero1;
	$incremento = ++$numero1;
	--$numero1;
	$decremento = --$numero1;
	++$numero1;

?>

<html>
<body>
	<?php echo "$numero1 + $numero2 = $suma"; ?>
	</br>
	</br>
	<?php echo "$numero1 - $numero2 = $resta"; ?>
	</br>
	</br>
	<?php echo "$numero1 * $numero2 = $multiplicacion"; ?>
	</br>
	</br>
	<?php echo "$numero1 / $numero2 = $division"; ?>
	</br>
	</br>
	<?php echo "$numero1 % $numero2 = $resto"; ?>
	</br>
	</br>
	<?php echo "Numero opuesto de $numero1 = $opuesto"; ?>
	</br>
	</br>
	<?php echo "Incremento de $numero1 = $incremento"; ?>
	</br>
	</br>
	<?php echo "Decremento de $numero1 = $decremento"; ?>

</body>

</html>