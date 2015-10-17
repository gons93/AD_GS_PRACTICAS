<meta charset="utf8">
<?php 
	const PERMISO_LOGIN=1;
	const PERMISO_LEERFACTURACION=2;
	const PERMISO_DATOSEMPRESARIALES=4;

	
 ?>


 <html>
 <body>
 	<br/>
 	 <hr/>
 	 <?php printf("<center><b>USUARIO CON PERMISOS DE LOGIN.</b></center>");
 	 		$usuario=PERMISO_LOGIN;
 	 ?>
 	 <hr/>
 	 <br/><br/> 
 	<?php 
 		if ($usuario & PERMISO_LOGIN) {
 			printf("El usuario tiene permisos de login. ");
 		}else{
 			printf("El usuario no tiene permisos de login. ");
 		}
 	 ?>
 	 <br/><br/>
 	 <?php 
 		if ($usuario & PERMISO_LEERFACTURACION) {
 			printf("El usuario tiene permisos para leer facturacion. ");
 		}else{
 			printf("El usuario no tiene permisos para leer facturacion. ");
 		}
 	 ?>
 	 <br/><br/>
 	 <?php 
 		if ($usuario & PERMISO_DATOSEMPRESARIALES) {
 			printf("El usuario tiene permisos para acceder a datos empresariales. ");
 		}else{
 			printf("El usuario no tiene permisos para acceder a datos empresariales. ");
 		}
 	 ?>
 	 <br/><br/>
 	 <hr/>
 	 <?php printf("<center><b>SE AÑADEN PERMISOS DE LEER FACTURACION.</b></center>");
 	 		$usuario+=PERMISO_LEERFACTURACION;
 	 ?>
 	 <hr/>
 	 <br/><br/>
 	 <?php 
 		if ($usuario & PERMISO_LOGIN) {
 			printf("El usuario tiene permisos de login. ");
 		}else{
 			printf("El usuario no tiene permisos de login. ");
 		}
 	 ?>
 	 <br/><br/>
 	 <?php 
 		if ($usuario & PERMISO_LEERFACTURACION) {
 			printf("El usuario tiene permisos para leer facturacion. ");
 		}else{
 			printf("El usuario no tiene permisos para leer facturacion. ");
 		}
 	 ?>
 	 <br/><br/>
 	 <?php 
 		if ($usuario & PERMISO_DATOSEMPRESARIALES) {
 			printf("El usuario tiene permisos para acceder a datos empresariales. ");
 		}else{
 			printf("El usuario no tiene permisos para acceder a datos empresariales. ");
 		}
 	 ?>
 	 <br/><br/>
 	 <hr/>
 	 <?php printf("<center><b>SE QUITAN PERMISOS DE LOGIN.</b></center>");
 	 		$usuario-=PERMISO_LOGIN;
 	 ?>
 	 <hr/>
 	 <br/><br/>
 	 <?php 
 		if ($usuario & PERMISO_LOGIN) {
 			printf("El usuario tiene permisos de login. ");
 		}else{
 			printf("El usuario no tiene permisos de login. ");
 		}
 	 ?>
 	 <br/><br/>
 	 <?php 
 		if ($usuario & PERMISO_LEERFACTURACION) {
 			printf("El usuario tiene permisos para leer facturacion. ");
 		}else{
 			printf("El usuario no tiene permisos para leer facturacion. ");
 		}
 	 ?>
 	 <br/><br/>
 	 <?php 
 		if ($usuario & PERMISO_DATOSEMPRESARIALES) {
 			printf("El usuario tiene permisos para acceder a datos empresariales. ");
 		}else{
 			printf("El usuario no tiene permisos para acceder a datos empresariales. ");
 		}
 	 ?>
 	 <br/><br/>
 	 <hr/>
 	 <?php printf("<center><b>SE AÑADEN PERMISOS DE LECTURA DE DATOS EMPRESARIALES.</b></center>");
 	 		$usuario-=PERMISO_DATOSEMPRESARIALES;
 	 ?>
 	 <hr/>
 	 <br/><br/>
 	 <?php 
 		if ($usuario & PERMISO_LOGIN) {
 			printf("El usuario tiene permisos de login. ");
 		}else{
 			printf("El usuario no tiene permisos de login. ");
 		}
 	 ?>
 	 <br/><br/>
 	 <?php 
 		if ($usuario & PERMISO_LEERFACTURACION) {
 			printf("El usuario tiene permisos para leer facturacion. ");
 		}else{
 			printf("El usuario no tiene permisos para leer facturacion. ");
 		}
 	 ?>
 	 <br/><br/>
 	 <?php 
 		if ($usuario & PERMISO_DATOSEMPRESARIALES) {
 			printf("El usuario tiene permisos para acceder a datos empresariales. ");
 		}else{
 			printf("El usuario no tiene permisos para acceder a datos empresariales. ");
 		}
 	 ?>
 </body>
 </html>