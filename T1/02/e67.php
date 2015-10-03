<?php 
	$numero = mt_rand(0,6);

	switch ($numero) {
		case '0':
			echo "lunes";
			break;
		
		case '1':
			echo "martes";
			break;

		case '2':
			echo "miercoles";
			break;

		case '3':
			echo "jueves";
			break;

		case '4':
			echo "viernes";
			break;

		case '5':
			echo "sabado";
			break;

		case '6':
			echo "domingo";
			break;
	}
 ?>