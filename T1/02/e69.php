<?php 
	$real = mt_rand()/mt_getrandmax();
	$mil = -1000+mt_rand()/mt_getrandmax()*(2000);
	$truncado = floor($mil*1000)/1000;
	$trunc_decenas = floor($mil/10)*10;
 ?>
	<html>
	<body>
	<p>
	<?php echo "<b>Numero real aleatorio entre 0 y 1:</b> $real"; ?>
	</br></br>
	<?php echo "<b>Numero real aleatorio entre -1000 y 1000:</b> $mil";?>
	</br></br>
	<?php echo "<b>Segundo numero truncado a las milesimas:</b> $truncado";?>
	</br></br>
	<?php echo "<b>Segundo numero truncado a las decenas:</b> $trunc_decenas";?>
	</p>
	</body>
	</html>