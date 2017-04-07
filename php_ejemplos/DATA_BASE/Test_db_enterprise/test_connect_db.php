<?php 
function DBconnect(){
	if (!($link=mysqli_connect("localhost","root",""))) {
		echo "There is an error connecting to the DB.";
		exit();
		
	}
	if (!mysqli_select_db($link, "db_enterprise")) {
		echo "There is an error connecting to the DB.";
		exit();
	}
	return $link;
}
function DBconnect2(){
	if (!($link=mysqli_connect("localhost","root",""))) {
		echo "There is an error connecting to the DB.";
		exit();
		
	}
	if (!mysqli_select_db($link, "car_dealer_db")) {
		echo "There is an error connecting to the DB.";
		exit();
	}
	return $link;
}

 ?>