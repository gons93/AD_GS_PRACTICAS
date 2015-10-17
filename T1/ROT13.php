<?php 
	$cadena = "hola gonzalo";
	echo $cadena;
	for ($i=0; $i < strlen($cadena); $i++) { 
		if ($cadena[$i]!=' ') {
			if(chr(ord($cadena[$i])+13)<'z'){
				$cadena[$i]=chr(ord($cadena[$i])+13);
			}else{
				$cadena[$i]=chr(ord($cadena[$i])-13);
			}
		}else{
			$cadena[$i]=' ';
		}
		
		}		
 ?>

 <html>
 <body>
 	<br/><br/>
 	<?php echo $cadena; ?>
 </body>
 </html>