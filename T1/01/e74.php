<?php
	$numero = mt_rand(100,200);

	$binario = decbin($numero);
	$octal = decoct($numero);
	$hexadecimal = dechex($numero); 
?>

<html>
	<a><b><u>Numero aleatorio entre 100 y 200, ambos inlcusive</u></b></a>
</br>
</br>
	<a><b><?php echo $decimal.", ".$binario.", ".$octal.", ".$hexadecimal;?></b></a>
</html>