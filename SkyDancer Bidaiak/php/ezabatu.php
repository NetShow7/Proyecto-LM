<?php
	include("connect.php");
		$link=connectSkydancer(); #We are calling the function
		#get the data from the form
		$id=$_GET['id'];
		#insert into the database
		mysqli_query($link, "delete from flights where id='$id' ");
		#show the result
		mysqli_close($link);
		header("Location: ../index.php");
	?>
