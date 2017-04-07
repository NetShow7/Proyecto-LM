<html>
<head>
	<link rel="stylesheet" type="text/css" href="..\php.css">
	<title>PHPren adibidea</title>
</head>
<body>
Employees
	<?php 
		include("test_connect_db.php");
		$link = DBconnect();
		$result=mysqli_query($link, "select * from employees");	
	?>

	<table border=1>
		<tr>
			<th>
				employee ID
			</th>
			<th>
				employee name
			</th>
		</tr>
		<?php 
			while ($x = mysqli_fetch_array($result)) {
				printf("<tr><td>%s</td><td>%s</td></tr>", $x["emp_ID"], $x["name"]);
			}

			mysqli_free_result($result);
			mysqli_close($link);
		 ?>
	</table>
</body>
</html>