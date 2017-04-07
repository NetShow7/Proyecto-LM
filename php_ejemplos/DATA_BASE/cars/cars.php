<html>
<head>
	<link rel="stylesheet" type="text/css" href="php.css">
	<title>PHPren adibidea</title>
</head>
<body>
Cars
	<?php 
		include("test_connect_db.php");
		$link = DBconnect2();
		$result=mysqli_query($link, "select * from cars");	
	?>

	<table border=1>
		<tr>
			<th>
				chassis number
			</th>
			<th>
				brand
			</th>
			<th>
				model
			</th>
			<th>
				year
			</th>
			<th>
				color
			</th>
		</tr>
		<?php 
			while ($x = mysqli_fetch_array($result)) {
				printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%d</td><td>%s</td></tr>", $x["Chassis_number"], $x["brand"], $x["model"], $x["year"], $x["color"]);
			}

			mysqli_free_result($result);
			mysqli_close($link);
		 ?>
	</table>
</body>
</html>