<?php
	$numero = mt_rand(100,200);

	$binario = decbin($numero);
	$octal = decoct($numero);
	$hexadecimal = dechex($numero); 

	echo $numero;
	echo $binario;
	echo $octal;
	echo $hexadecimal;
?>