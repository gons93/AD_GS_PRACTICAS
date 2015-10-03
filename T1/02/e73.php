<?php 
	$cadena = "0123456789abc.";

	for ($i=0; $i < 5; $i++) { 
		$cadenaentera .= $cadena[mt_rand(0,13)];
		$cadenareal .= $cadena[mt_rand(0,13)];
	}

	$entero = (int)$cadenaentera;
	$real = (float)$cadenareal;

 ?>

 <html>
 <body>
 	<p>
 		<?php echo "La caena entera <b>$cadenaentera</b> se convierte al entero <b>$entero</b>"; ?>
 		<br><br>
 		<?php echo "La caena real <b>$cadenareal</b> se convierte al número real <b>$real</b>"; ?>
 	</p>
 </body>
 </html>