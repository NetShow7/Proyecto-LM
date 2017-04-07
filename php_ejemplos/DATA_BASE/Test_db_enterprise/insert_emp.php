<html>
<head>
	<title></title>
</head>
<body>
<?php 
	include("test_connect_db.php");
	$link=DBconnect();

	$id=$_POST["id"];
	$name=$_POST["name"];

	mysqli_query($link, "insert into employees (emp_ID, name) values ('$id','$name') ");

	mysqli_close($link);

	header("Location: queryDB.php")

 ?>
</body>
</html>