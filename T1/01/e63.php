<?php
	$numero = mt_rand(100,200);
	$ref = &$numero;
?>
<html>
	<a><b><u>Numero aleatorio entre 100 y 200, ambos inlcusive</u></b></a>
</br>
</br>
	<a><b><?php echo $ref;?></b></a>
</html>