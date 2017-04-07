<html>
<head>
	<title></title>
</head>
<body>
<?php
	include("test_connect_db.php");
	$link=DBconnect2();

	$chassis=$_GET["chassis"];


	mysqli_query($link, "delete from cars where Chassis_number = '$chassis' ");

	mysqli_close($link);

	header("Location: delete.php")

 ?>
</body>
</html>
