<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="php.css">
	<title></title>
</head>
<body>
	<h1 style="width: 50px; margin: auto">PHP</h1>
	<h2 style="width: 50px; margin: auto">exercise1</h2>
	<div class="box">
		<?php 
		$a=7;
		$b = 3.34;
		$c = "Hello world";
		echo "The value of 'a' is ".$a;
		echo "<br>The value of 'b' is ".$b;
		echo "<br>The value of 'c' is ".$c;
		echo "<br>";
		echo "<br>now we are going to do some operations";
		echo "<br>";
		echo "<br>a + b = ".($a+$b);

		?>
	</div>
	<br>
	<div class="box1">
		<h2>the IF statement</h2>
		<?php
		if ($a<$b) {
			echo "'A' is smaller than 'B'";		
		}else{
			echo "'B' is smaller than 'A'";
		}
		?>
		
	</div>
</body>
</html>