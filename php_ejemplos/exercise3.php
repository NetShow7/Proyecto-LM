<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="php.css">
	<title></title>
</head>
<body>
<h1>PHP</h1>
<h2>exercise2</h2>
<div class="box1">
	<?php 
		echo "simple line situated outside the loop";
		echo "<br>";
		for ($i=0; $i < 10; $i++) { 
			echo "<br>Inside the loop. Line ".$i;
		}
	 ?>
</div>
<br>
<div class="box1">
	<?php 
		printf("Bi zenbakia formatu desberdinekin: %d %f %.2f",2,2,2);
		echo "This is the multiply table of the number 7:";
		echo "<br>";
		for ($i=0; $i < 100; $i++) { 
			echo "<br>7x".$i."=".($i*7);
		}
	 ?>
</div>
</body>
</html>