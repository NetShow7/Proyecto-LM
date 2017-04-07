<html>
<head>
	<title></title>
</head>
<body>
<?php
	include("test_connect_db.php");
	$link=DBconnect2();

	$chassis=$_POST["chassis"];
	$brand=$_POST["brand"];
	$model=$_POST["model"];
	$year=$_POST["year"];
	$color=$_POST["color"];

	mysqli_query($link, "insert into cars (Chassis_number, brand, model, year, color) values ('$chassis','$brand','$model','$year','$color') ");

	mysqli_close($link);

	header("Location: index.php")

 ?>
</body>
</html>
