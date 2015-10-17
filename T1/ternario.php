<meta charset="utf-8">
<?php
	$usuario = $_GET['usuario'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if(isset($usuario)?printf("Bienvenido $usuario"):printf("Login")) ?>
</body>
</html>