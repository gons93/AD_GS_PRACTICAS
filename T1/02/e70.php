<?php 
	$numero1 = -100+mt_rand()/mt_getrandmax()*(200);
	$numero2 = mt_rand(1,10);
	$suma = $numero1+$numero2;
	$resta = $numero1-$numero2;
	$multiplicacion = $numero1*$numero2;
	$division = $numero1/$numero2;
	$resto = $numero1%$numero2;
	$opuesto = -$numero1;
	$incremento = ++$numero1;
	--$numero1;
	$decremento = --$numero1;
	++$numero1;

	echo "<b>$numero1 + $numero2 = $suma</b>";
	echo "</br></br>";
	echo "<b>$numero1 - $numero2 = $resta</b>";
	echo "</br></br>";
	echo "<b>$numero1 * $numero2 = $multiplicacion</b>";
	echo "</br></br>";
	echo "<b>$numero1 / $numero2 = $division</b>";
	echo "</br></br>";
	echo "<b>$numero1 % $numero2 = $resto</b>";
	echo "</br></br>";
	echo "<b>El opuesto de $numero1 es $opuesto</b>";
	echo "</br></br>";
	echo "<b>$numero1++ vale $incremento</b>";
	echo "</br></br>";
	echo "<b>$numero1-- vale $decremento</b>";
?>