<html>
<body>

<div style="width:40%; float: left; padding: 5%;">
<h3>WHILE</h3>
<hr/>
<?php 
	$n=0;
	while ( $n != 16) {
		$n = mt_rand(0,50);
		printf("$n, ");
	}
 ?>
</div>
<div style="width:40%; float: left; padding: 5%">
<h3>DO WHILE</h3>
<hr/>
 <?php 
	$n=0;
	do {
		$n = mt_rand(0,50);
		printf("$n, ");
	}while ( $n != 16)
 ?>
</div>
 </body>
 </html>