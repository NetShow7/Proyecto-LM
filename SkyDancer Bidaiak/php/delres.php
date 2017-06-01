<?php
	include("connect.php");
		$link=connectSkydancer(); #We are calling the function
		#get the data from the form
		$fid=$_GET['id'];
    $uid=$_SESSION["id"];
		#insert into the database
		mysqli_query($link, "DELETE FROM reserv WHERE u_id = '$uid' AND f_id = '$fid'");
    mysqli_query($link, "UPDATE FLIGHTS SET tickets_sold = tickets_sold-1 WHERE id = $fid");
		#show the result
		mysqli_close($link);
		header("Location: ../index.php");
	?>
